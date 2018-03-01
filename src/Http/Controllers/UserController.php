<?php

namespace LaravelModule\Http\Controllers;

use Illuminate\Http\Request;
use Ckryo\Framework\Http\BaseController;

class UserController extends BaseController
{
    // http get::uri
    public function index() {}

    // http get::uri/create
    public function create() {}

    // http post::uri
    public function store(Request $request) {}

    // http get::uri/id
    public function show($id) {}

    // http get::uri/id
    public function edit($id) {}

    // http put::uri/id
    public function update(Request $request, $id) {}

    // http delete::uri/id
    public function destroy($id) {}
}
