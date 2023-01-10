<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Traits\Uploadable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use Uploadable;

    public function __invoke()
    {
        return view("dashboard.index");
    }

    public function upload_ckeditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('ckeditor'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('ckeditor/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function ckeditorUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $url = $this->uploadOne($request['upload'], '', '', 'ckeditor');
            return response()->json(['url' => asset($url)]);
        }
    }
}
