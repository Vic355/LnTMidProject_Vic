<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Book;
use File;
class UploadController extends Controller
{
	public function upload(){
		$book = DB::table('book')->paginate(12);;
		return view('upload',['book' => $book]);
		 
	}
	public function newcreate()    {
        return view('create');
    }
 
	public function create(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
			'title' => 'required|between:5,20',
			'author' => 'required|between:5,20',
			'pages' => 'required|numeric|gt:0',
			'year' => 'required|integer|between:2000,2021',
			'borrow_status' => 'required',
		]);
 

		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();

		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Book::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
			'title' => $request->title,
			'author' => $request->author,
			'pages' => $request->pages,
			'year' => $request->year,
			'borrow_status' => $request->borrow_status,
		]);
 
		return redirect()->back();
	}
    public function erase($id){

        $book = Book::where('id',$id)->first();
        File::delete('data_file/'.$book->file);
     

        Book::where('id',$id)->delete();
     
        return redirect()->back();
    }
    public function find(Request $request)
	{
		$find = $request->find;
		$book = DB::table('book')
		->where('title','like',"%".$find."%")
		->paginate();
 
		return view('upload',['book' => $book]);
 
	}
	public function seemore($id,Request $request)
	{

		$book = DB::table('book')
		->where('id','like',"%".$id."%")
		->paginate();
 
		return view('seemore',['book' => $book]);
 
	}
	public function edit($id, Request $request)
    {
        $book = Book::findOrFail($id);
        return view('form', compact('book'));
    }

    public function update($id, Request $request, Book $book)
    {
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'.$book->id,
			'keterangan' => 'required'.$book->id,
			'title' => 'required|between:5,20'.$book->id,
			'author' => 'required|between:5,20'.$book->id,
			'pages' => 'required|numeric|gt:0'.$book->id,
			'year' => 'required|integer|between:2000,2021'.$book->id,
			'borrow_status' => 'required'.$book->id,
		]);
		$book = Book::find($id);

		if($request->file != ''){        
			 $path = public_path().'/data_file/';
   
			 //code for remove old file
			 if($book->file != ''  && $book->file != null){
				  $file_old = $path.$book->file;
				  unlink($file_old);
			 }
   
			 //upload new file
			 $file = $request->file;
			 $filename = $file->getClientOriginalName();
			 $file->move($path, $filename);
   
			 //for update in table
			 $book->update(['file' => $filename]);
    	Book::findOrFail($id)->update([
            'keterangan' => $request->keterangan,
			'title' => $request->title,
			'author' => $request->author,
			'pages' => $request->pages,
			'year' => $request->year,
			'borrow_status' => $request->borrow_status,
        ]);
        $book = Book::all();
        return view('success', compact('book'));
    }
}
}