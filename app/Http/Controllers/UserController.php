<?php namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilderTrait;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\UserForm;
use Request;
use App\User;
class UserController extends Controller {

  use FormBuilderTrait;


  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $users = \App\User::all();
    return view('users.list', compact('users'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(FormBuilder $formBuilder)
  {
    $form = $formBuilder->create(\App\Forms\UserForm::class, [
      'method'=>'POST',
      'url' => route('user.store')
    ]);
    return view('users.create', compact('form'));

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $form = $this->form(UserForm::class);

    if (!$form->isValid()) {
      return redirect()->back()->withErrors($form->getErrors())->withInput();
    }
    $user = User::create($request::all());
    $charac = new \App\Characteristic();
    $charac->health = 100;
    $charac->stamina = 10;
    $user->characteristic()->save($charac);


    return redirect()->action('PageController@home');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit()
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    User::findOrFail($id)->delete();
    return redirect()->action('PageController@home');
  }

}

?>