<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class FrontendController extends Controller
{
    public function homepage(): \Inertia\Response
    {
        return Inertia::render('Frontend/Homepage');
    }

    public function services(): \Inertia\Response
    {
        return Inertia::render('Frontend/Services');
    }

    public function team(): \Inertia\Response
    {
        return Inertia::render('Frontend/Team');
    }

    public function gallery(): \Inertia\Response
    {
        return Inertia::render('Frontend/Gallery');
    }

    public function contact(): \Inertia\Response
    {
        return Inertia::render('Frontend/Contact');
    }

    public function call(): \Inertia\Response
    {
        return Inertia::render('Frontend/Call');
    }

    public function terms(): \Inertia\Response
    {
        return Inertia::render('Frontend/Terms');
    }

    public function cookie(): \Inertia\Response
    {
        return Inertia::render('Frontend/Cookie');
    }

    public function send_contact(){
        $to = 'asca.bf@yahoo.com';
        $to = 'georgescu.gabriel90@gmail.com';

        $subject = 'Formular Contact Website :: Subiect '.request()->post('subject');

        $headers  = "From: " . strip_tags(request()->post('email')) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $message = '<table>
                      <tr>
                        <th>Subiect</th>
                        <th>'.request()->post('subject').'</th>
                      </tr>
                      <tr>
                        <th>Nume</th>
                        <th>'.request()->post('first_name').'</th>
                      </tr>
                      <tr>
                        <th>Prenume</th>
                        <th>'.request()->post('last_name').'</th>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <th>'.request()->post('email').'</th>
                      </tr>
                      <tr>
                        <th>Telefon</th>
                        <th>'.request()->post('phone').'</th>
                      </tr>
                      <tr>
                        <th>Mesaj</th>
                        <th>'.request()->post('message').'</th>
                      </tr>
                    </table>';


        if(mail($to, $subject, $message, $headers)) {
            return back()->with([
                'message' => 'Mesaj trimis cu succes',
                'status'  => 1
            ]);
        } else {
            return back()->with([
                'message' => 'Eroare la trimitere mail.',
                'status'  => 0
            ]);
        }

    }

    public function send_evaluation(){
        $to = 'asca.bf@yahoo.com';
        $to = 'georgescu.gabriel90@gmail.com';

        $subject = 'Formular Evaluare';

        $headers  = "From: " . strip_tags(request()->post('email')) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $message = '<table>
                      <tr>
                        <th>Nume</th>
                        <th>'.request()->post('first_name').'</th>
                      </tr>
                      <tr>
                        <th>Prenume</th>
                        <th>'.request()->post('last_name').'</th>
                      </tr>
                      <tr>
                        <th>Telefon</th>
                        <th>'.request()->post('phone').'</th>
                      </tr>
                      <tr>
                        <th>Oras</th>
                        <th>'.request()->post('city').'</th>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <th>'.request()->post('email').'</th>
                      </tr>
                    </table>';


        if(mail($to, $subject, $message, $headers)) {
            return back()->with([
                'message' => 'Mesaj trimis cu succes',
                'status'  => 1
            ]);
        } else {
            return back()->with([
                'message' => 'Eroare la trimitere mail.',
                'status'  => 0
            ]);
        }
    }
}
