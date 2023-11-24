<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailFormRequest;
use App\Mail\MailForm;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{

    public function showMailForm()
    {
        return view("mail_form");
    }

    public function sendMailForm(MailFormRequest $request){

        Mail::to("mymail@yandex.ru")->send(new MailForm($request->validated())); //валидированные данные ($formData)из формы(текст и имейл) передаются в MailForm

        return redirect(route("contacts"));
    }
}
