<?php namespace App\Http\Controllers;

use App\Article;
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

		return view('articles.create');
		
	}

	public function store(ArticleRequest $request)
	{
		
		Article::create($request->all());
		
		return redirect('articles/');
		


	}	

	public function eliminar($id)
	{

		$articles = Article::findOrFail($id);
		$articles->delete();

		return redirect('articles/');
		
	}

	public function edit($id)
	{

		$article = Article::findOrFail($id);

		return view('articles.edit', compact('article'));
		
	}

	public function update($id , ArticleRequest $request)
	
	{
		$article = Article::findOrFail($id);	
		$article->update( $request->all());
		
		return redirect ('articles');
		
	}

}
