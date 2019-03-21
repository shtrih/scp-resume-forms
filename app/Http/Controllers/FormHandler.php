<?php
/**
 * Created by PhpStorm.
 * User: shtrih
 * Date: 21.03.2019
 * Time: 1:48
 */
namespace App\Http\Controllers;

use App\Events\FormEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormHandler extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nickname' => 'required|max:32',
            'email' => 'required|max:255',
        ]);

        $data = $request->all();

        \DB::table('resume')->insert([
            'email' => $request->email,
            'form_data' => $this->prepareData($data),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        event(new FormEvent($data));

        return response()->json(['status' => 'ok']);
    }

    protected function prepareData(array $data)
    {
        $result = '';

        foreach ($data as $k => $v) {
            $result .= sprintf("%s: %s\n", $k, $v);
        }

        return $result;
    }
}