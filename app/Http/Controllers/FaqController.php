<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FaqController
{
    /*
     * @return faq view
     */
    public function show()
    {
        $faqs = DB::table('faqs')->get();

        return view('faq', [
            'faqs' => $faqs
        ]);
    }
}
