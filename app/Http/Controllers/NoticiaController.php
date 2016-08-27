<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNoticiaRequest;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class NoticiaController extends AppBaseController
{
	 public function __construct(){
        $this->middleware('auth');
    }
   

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$query = Noticia::query();
        $columns = Schema::getColumnListing('$TABLE_NAME$');
        $attributes = array();

        foreach($columns as $attribute){
            if($request[$attribute] == true)
            {
                $query->where($attribute, $request[$attribute]);
                $attributes[$attribute] =  $request[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        $noticias = $query->get();

        return view('noticias.index')
            ->with('noticias', $noticias)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Noticia.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('noticias.create');
	}

	/**
	 * Store a newly created Noticia in storage.
	 *
	 * @param CreateNoticiaRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateNoticiaRequest $request)
	{
        $input = $request->all();

		$noticia = Noticia::create($input);

		Flash::message('Noticia saved successfully.');

		return redirect(route('noticias.index'));
	}

	/**
	 * Display the specified Noticia.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$noticia = Noticia::find($id);

		if(empty($noticia))
		{
			Flash::error('Noticia not found');
			return redirect(route('noticias.index'));
		}

		return view('noticias.show')->with('noticia', $noticia);
	}

	/**
	 * Show the form for editing the specified Noticia.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$noticia = Noticia::find($id);

		if(empty($noticia))
		{
			Flash::error('Noticia not found');
			return redirect(route('noticias.index'));
		}

		return view('noticias.edit')->with('noticia', $noticia);
	}

	/**
	 * Update the specified Noticia in storage.
	 *
	 * @param  int    $id
	 * @param CreateNoticiaRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateNoticiaRequest $request)
	{
		/** @var Noticia $noticia */
		$noticia = Noticia::find($id);

		if(empty($noticia))
		{
			Flash::error('Noticia not found');
			return redirect(route('noticias.index'));
		}

		$noticia->fill($request->all());
		$noticia->save();

		Flash::message('Noticia updated successfully.');

		return redirect(route('noticias.index'));
	}

	/**
	 * Remove the specified Noticia from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Noticia $noticia */
		$noticia = Noticia::find($id);

		if(empty($noticia))
		{
			Flash::error('Noticia not found');
			return redirect(route('noticias.index'));
		}

		$noticia->delete();

		Flash::message('Noticia deleted successfully.');

		return redirect(route('noticias.index'));
	}
	
}
