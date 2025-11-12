<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFolder;
use App\Models\Folder;

class FolderController extends Controller
{
    /**
     * 【フォルダ作成ページの表示機能】
     * 
     * GET /folders/create
     * @return \Illuminate\View\View
     */
    public function showCreateForm()
    {
        return view('folders/create');
    }

    /**
     * 【フォルダ作成機能】
     * 
     * POST /folders/create
     * @params Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @var CreateFolder
     */
    public function create(CreateFolder $request)
    {
        $folder = new Folder();
        $folder->title = $request->title;
        $folder->save();

        return redirect()->route('tasks.index', [
            'id' => $folder->id
        ]);
    }
}
