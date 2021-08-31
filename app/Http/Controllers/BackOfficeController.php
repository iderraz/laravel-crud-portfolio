<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Skill;
use App\Models\Portfolio;
use App\Models\Service;


class BackOfficeController extends Controller
{
    public function index () {
        $aboutd = About::all();
        $contactd = Contact::all();
        $factd = Fact::all();
        $skilld = Skill::all();
        $portfoliod = Portfolio::all();
        $serviced = Service::all();
        return view('template/backoffice', compact('aboutd', 'contactd', 'factd', 'porfoliod', 'serviced', 'skilld'));
    }
};

