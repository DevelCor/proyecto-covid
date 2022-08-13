<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //
    public function index(){
        if (auth()->user()->role == 'admin') {
            return view('admin.notice');
        }

        $notices = Notice::latest()->oldest()->get();
        return view('user.notice',['notices' => $notices]);
    }

    public function store(Request $request) {
        $data['title'] = $request->all()['notice_title'];
        $data['description'] = $request->all()['notice_description'];

        $notice = Notice::create($data);

        if ($notice) {
            return redirect()->back()->with('message', 'noticia creada');
        }
    }
}
