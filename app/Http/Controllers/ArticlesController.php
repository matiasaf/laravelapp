<?php namespace App\Http\Controllers;

use App\Article;
use App\Tag;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;

 use App\Http\Controllers\Controller;
 use Carbon;
 use Request;


class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{

		$this->middleware('auth' , ['only' => ['create' , 'edit', 'eliminar']] );

	}


	public function index()
	{
			


		$articles = Article::latest('published_at')->publicado()->get();




		return view('articles.index', compact('articles'));
	}

	public function show ($id)
	{

		$articles = Article::findOrFail($id);


		return view('articles.show', compact('articles'));
	
	}

	public function create()
	{


		$tags= Tag::lists('name', 'id');

		return view('articles.create', compact('tags'));
		
	}

	public function store(ArticleRequest $request)
	{


	/*	$article= new Article ($request->all());
		
		\Auth::user()->articles()->save($article);

		Article::create($request->all());*/



		$article = \Auth::user()->articles()->create($request->all());

		$this->syncTags($article , $request->input('tag_list'));

		\Session::flash('mensaje_flash', 'Tu articulo fue creado con éxito!');

		return redirect('articles');
		
	


	}

	public function eliminar($id)
	{

		$articles = Article::findOrFail($id);
		$articles->delete();



		return redirect('articles');
		
	}

	public function edit($id)
	{

		$tags= Tag::lists('name', 'id');

		$article = Article::findOrFail($id);

		return view('articles.edit', compact('article', 'tags'));
		
	}

	public function update($id , ArticleRequest $request)
	
	{
		$article = Article::findOrFail($id);	
		$article->update( $request->all());


		$this->syncTags($article, $request->input('tag_list'));



		
		return redirect ('articles');
		
	}

	public function syncTags(Article $article , array $tags){

		$article->tags()->sync($tags);

	}

}
