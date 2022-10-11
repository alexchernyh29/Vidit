<?php

namespace App\Http\Controllers;

    use App\Models\App;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    public function index()
    {
        $data['app'] = App::all();
        return view('app.index', $data);
    }

    public function create()
    {
        return view('app.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'tip' => 'required',
            'marka' => 'required',
            'model' => 'required',
            'pk' => 'required',
            'dv' => 'required',
            'korobka' => 'required',
            'fio' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'gos' => 'required',
            'ra' => 'required',
            'comment' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect((route('app.create')))->withInput();
        } else {
            $newApp = [
                'tip' => $input['tip'],
                'marka' => $input['marka'],
                'model' => $input['model'],
                'pk' => $input['pk'],
                'dv' => $input['dv'],
                'korobka' => $input['korobka'],
                'fio' => $input['fio'],
                'email' => $input['email'],
                'mobile' => $input['mobile'],
                'gos' => $input['gos'],
                'ra' => $input['ra'],
                'comment' => $input['comment'],
            ];
            App::create($newApp);
            return redirect(route('app.index'));
        } // else if ($validator->fails())
    }

    public function show($id)
    {
        $myApp = App::find($id);
        return view('show.app', ['app' => $myApp]);
    }

    public function edit(Request $request, $id)
    {
        $app = App::find($id);
        if (is_null($app)) {
            return redirect(route('app.index'));
        } else {
            $data['app'] = $app;
            return view('app.edit', $data);
        } // else if (is_null($news))
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'tip' => 'required',
            'marka' => 'required',
            'model' => 'required',
            'pk' => 'required',
            'dv' => 'required',
            'korobka' => 'required',
            'fio' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'gos' => 'required',
            'ra' => 'required',
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            request()->session('Не введены все неоходимые данные');
            return redirect((route('app.edit', ['id' => $input['id']])))->withInput();
        } else {
            $one_app = App::find($input['id']);
            $one_app->fill($input)->save();
            return redirect(route('app.index'));
        } // else  if ($validator->fails())
    }

    public function destroy(Request $request, $id)
    {
        $app = App::find($id);
        $app->delete();
        return redirect(route('app.index'))->with('success', 'Заявка удалена!');
    }
}


