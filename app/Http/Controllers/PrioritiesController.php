<?php

namespace App\Http\Controllers;

use App\Models\MatchRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PrioritiesController extends Controller
{

    public function __construct()
    {

        $this->doctors = [
            [
                "name" => "Jamal Cameron",
                "description" => "Jamal Cameron, AMFT, MA is an associate marriage and family therapist (90345) who has worked throughout southern California. Jamal began his career at Western New England University conducting research including abduction prevention and the effects of peer mentorship with children and adolescents. Upon finishing undergraduate studies, Jamal moved to southern California focusing his work on providing therapy to individuals with schizophrenia spectrum illness, depression, bipolar and substance abuse. Jamal’s work has led him to take on advocacy roles related to assisting families with academic and legal concerns. Jamal’s passions have led him to trauma and psychedelic-assisted psychotherapy. Jamal incorporates a variety of approaches that include mindfulness, humanistic and psychoanalytic techniques. Jamal Cameron is now the bay area working and researching topics such as: psychedelics and consciousness. Jamal is currently providing ketamine assisted psychotherapy in a group psychiatry practice.",
                "experties" => "['Life Transitions', 'Race-Related', 'Stress', 'Family Dynamics', 'Post-Traumatic Stress Disorder (PTSD)', 'Bipolar Disorder','Psychosis'Anxiety','Depression']",
                "zip-code" => "10001",
                "degrees" => ['MBBS (Sydney)', 'FRACS (Paediatric Surgery)'],
                "year-of-experience" => 20,
                "address" => "123, Western Road, Melbourne Australia",
                "phone" => "0123456789",
                "email" => "hello@dumy.com",
                "website" => "www.dumy.com",
                "availablity" => [
                    "Monday - Friday" => "9.00, 20.00",
                    "Saturday" => "10.00, 16.00",
                    "Sunday" => "9.30, 18.00",
                    "Friday" => "closed"
                ],
                "image" => "https://admin-app.mywellbeing.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBa3NIIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f4b7d5a67cee5bd289acea3c76b556b936eb7372/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MY21WemFYcGxTU0lOTXpBd2VETXdNRDRHT2daRlZEb01kVzV6YUdGeWNFa2lDREFnTVFZN0JsUT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--71441f77d20aa7f02e8afb3ddb14673974d1dd9e/D63ED4C9-3EC2-4635-9BF9-913A2463794E_1_201_a.jpeg"
            ],
            [
                "name" => "Sarah Jame Thomes",
                "description" => "Sarah Jame Thomes, AMFT, MA is an associate marriage and family therapist (90345) who has worked throughout southern California. Jamal began his career at Western New England University conducting research including abduction prevention and the effects of peer mentorship with children and adolescents. Upon finishing undergraduate studies, Jamal moved to southern California focusing his work on providing therapy to individuals with schizophrenia spectrum illness, depression, bipolar and substance abuse. Jamal’s work has led him to take on advocacy roles related to assisting families with academic and legal concerns. Jamal’s passions have led him to trauma and psychedelic-assisted psychotherapy. Jamal incorporates a variety of approaches that include mindfulness, humanistic and psychoanalytic techniques. Jamal Cameron is now the bay area working and researching topics such as: psychedelics and consciousness. Jamal is currently providing ketamine assisted psychotherapy in a group psychiatry practice.",
                "experties" => "['Life Transitions', 'Race-Related', 'Stress', 'Family Dynamics', 'Post-Traumatic Stress Disorder (PTSD)', 'Bipolar Disorder','Psychosis'Anxiety','Depression']",
                "zip-code" => "10002",
                "degrees" => ['MBBS (Sydney)', 'FRACS (Paediatric Surgery)'],
                "year-of-experience" => 20,
                "address" => "123, Western Road, Melbourne Australia",
                "phone" => "0123456789",
                "email" => "hello@dumy.com",
                "website" => "www.dumy.com",
                "availablity" => [
                    "Monday - Friday" => "9.00, 20.00",
                    "Saturday" => "10.00, 16.00",
                    "Sunday" => "9.30, 18.00",
                    "Friday" => "closed"
                ],
                "image" => "https://admin-app.mywellbeing.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdkVFIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--d76bb59cbb8a2cfe09785fae6e2bff7a391d5c77/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MY21WemFYcGxTU0lOTXpBd2VETXdNRDRHT2daRlZEb01kVzV6YUdGeWNFa2lDREFnTVFZN0JsUT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--71441f77d20aa7f02e8afb3ddb14673974d1dd9e/IMG_0193.jpg"
            ],
            [
                "name" => "Calery Mirvis",
                "description" => "Calery Mirvis, AMFT, MA is an associate marriage and family therapist (90345) who has worked throughout southern California. Jamal began his career at Western New England University conducting research including abduction prevention and the effects of peer mentorship with children and adolescents. Upon finishing undergraduate studies, Jamal moved to southern California focusing his work on providing therapy to individuals with schizophrenia spectrum illness, depression, bipolar and substance abuse. Jamal’s work has led him to take on advocacy roles related to assisting families with academic and legal concerns. Jamal’s passions have led him to trauma and psychedelic-assisted psychotherapy. Jamal incorporates a variety of approaches that include mindfulness, humanistic and psychoanalytic techniques. Jamal Cameron is now the bay area working and researching topics such as: psychedelics and consciousness. Jamal is currently providing ketamine assisted psychotherapy in a group psychiatry practice.",
                "experties" => "['Life Transitions', 'Race-Related', 'Stress', 'Family Dynamics', 'Post-Traumatic Stress Disorder (PTSD)', 'Bipolar Disorder','Psychosis'Anxiety','Depression']",
                "zip-code" => "10003",
                "degrees" => ['MBBS (Sydney)', 'FRACS (Paediatric Surgery)'],
                "year-of-experience" => 20,
                "address" => "123, Western Road, Melbourne Australia",
                "phone" => "0123456789",
                "email" => "hello@dumy.com",
                "website" => "www.dumy.com",
                "availablity" => [
                    "Monday - Friday" => "9.00, 20.00",
                    "Saturday" => "10.00, 16.00",
                    "Sunday" => "9.30, 18.00",
                    "Friday" => "closed"
                ],
                "image" => "https://admin-app.mywellbeing.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBcm9HIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--a0bd8ab258808815d1ca8bfc15ca3fdf12bd657f/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MY21WemFYcGxTU0lOTXpBd2VETXdNRDRHT2daRlZEb01kVzV6YUdGeWNFa2lDREFnTVFZN0JsUT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--71441f77d20aa7f02e8afb3ddb14673974d1dd9e/Screen%20Shot%202022-01-21%20at%2012.05.45%20PM.png"
            ],
            [
                "name" => "Rachel Ryan",
                "description" => "Rachel Ryan, AMFT, MA is an associate marriage and family therapist (90345) who has worked throughout southern California. Jamal began his career at Western New England University conducting research including abduction prevention and the effects of peer mentorship with children and adolescents. Upon finishing undergraduate studies, Jamal moved to southern California focusing his work on providing therapy to individuals with schizophrenia spectrum illness, depression, bipolar and substance abuse. Jamal’s work has led him to take on advocacy roles related to assisting families with academic and legal concerns. Jamal’s passions have led him to trauma and psychedelic-assisted psychotherapy. Jamal incorporates a variety of approaches that include mindfulness, humanistic and psychoanalytic techniques. Jamal Cameron is now the bay area working and researching topics such as: psychedelics and consciousness. Jamal is currently providing ketamine assisted psychotherapy in a group psychiatry practice.",
                "experties" => "['Life Transitions', 'Race-Related', 'Stress', 'Family Dynamics', 'Post-Traumatic Stress Disorder (PTSD)', 'Bipolar Disorder','Psychosis'Anxiety','Depression']",
                "zip-code" => "10004",
                "degrees" => ['MBBS (Sydney)', 'FRACS (Paediatric Surgery)'],
                "year-of-experience" => 20,
                "address" => "123, Western Road, Melbourne Australia",
                "phone" => "0123456789",
                "email" => "hello@dumy.com",
                "website" => "www.dumy.com",
                "availablity" => [
                    "Monday - Friday" => "9.00, 20.00",
                    "Saturday" => "10.00, 16.00",
                    "Sunday" => "9.30, 18.00",
                    "Friday" => "closed"
                ],
                "image" => "https://admin-app.mywellbeing.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBZGM9IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--f9a86e5d3216b0ae1c91fa3d4e5e45fd53a56e38/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MY21WemFYcGxTU0lOTXpBd2VETXdNRDRHT2daRlZEb01kVzV6YUdGeWNFa2lDREFnTVFZN0JsUT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--71441f77d20aa7f02e8afb3ddb14673974d1dd9e/joannedsquare.png"
            ],
            [
                "name" => "Sarah Pace",
                "description" => "Sarah Pace, AMFT, MA is an associate marriage and family therapist (90345) who has worked throughout southern California. Jamal began his career at Western New England University conducting research including abduction prevention and the effects of peer mentorship with children and adolescents. Upon finishing undergraduate studies, Jamal moved to southern California focusing his work on providing therapy to individuals with schizophrenia spectrum illness, depression, bipolar and substance abuse. Jamal’s work has led him to take on advocacy roles related to assisting families with academic and legal concerns. Jamal’s passions have led him to trauma and psychedelic-assisted psychotherapy. Jamal incorporates a variety of approaches that include mindfulness, humanistic and psychoanalytic techniques. Jamal Cameron is now the bay area working and researching topics such as: psychedelics and consciousness. Jamal is currently providing ketamine assisted psychotherapy in a group psychiatry practice.",
                "experties" => "['Life Transitions', 'Race-Related', 'Stress', 'Family Dynamics', 'Post-Traumatic Stress Disorder (PTSD)', 'Bipolar Disorder','Psychosis'Anxiety','Depression']",
                "zip-code" => "10005",
                "degrees" => ['MBBS (Sydney)', 'FRACS (Paediatric Surgery)'],
                "year-of-experience" => 20,
                "address" => "123, Western Road, Melbourne Australia",
                "phone" => "0123456789",
                "email" => "hello@dumy.com",
                "website" => "www.dumy.com",
                "availablity" => [
                    "Monday - Friday" => "9.00, 20.00",
                    "Saturday" => "10.00, 16.00",
                    "Sunday" => "9.30, 18.00",
                    "Friday" => "closed"
                ],
                "image" => "https://admin-app.mywellbeing.com/rails/active_storage/representations/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBdUFGIiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--5737da3cc64a9eb679a746ec65cd841cb869dbbc/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MY21WemFYcGxTU0lOTXpBd2VETXdNRDRHT2daRlZEb01kVzV6YUdGeWNFa2lDREFnTVFZN0JsUT0iLCJleHAiOm51bGwsInB1ciI6InZhcmlhdGlvbiJ9fQ==--71441f77d20aa7f02e8afb3ddb14673974d1dd9e/IMG_5170%20(2).jpeg"
            ],
        ];
    }

    public function followuppreference(Request $request)
    {
        if (!empty($request->followuppreference)) {
            session(['followuppreference' => $request->followuppreference]);
            return redirect()->route('match.submit');
        }
        return redirect()->back()->with('error', 'Something Went Wrong');
    }

    public function submit(Request $request)
    {

        $store = MatchRequest::create([
            'gender' => Session::get('gender'),
            'lgbtqia' => Session::get('lgbtqia'),
            'age' => Session::get('age'),
            'ethnicity' => Session::get('ethnicity'),
            'about' => Session::get('about'),
            'email' => Session::get('email'),
            'zip' => Session::get('zip'),
            'inperson' => Session::get('inperson'),
            'location' => Session::get('location'),
            'neighborhood' => Session::get('neighborhood'),
            'weekdays' => Session::get('weekdays'),
            'weekends' => Session::get('weekends'),
            'fee' => Session::get('fee'),
            'whentostart' => Session::get('whentostart'),
            'action_oriented' => Session::get('action_oriented'),
            'relational_and_reflective' => Session::get('relational_and_reflective'),
            'creative_and_integrative' => Session::get('creative_and_integrative'),
            'group' => Session::get('group'),
            'experties' => Session::get('experties'),
            'techniquerequest' => Session::get('techniquerequest'),
            'technique' => Session::get('technique'),
            'followuppreference' => Session::get('followuppreference')
        ]);

        $zipCode = Session::get('zip');
        $data = [];

        foreach ($this->doctors as $doc) {
            if ($doc['zip-code'] == $zipCode) {
                array_push($data, $doc);
            }
        }

        return view('result', ["data" => $data]);
    }
}
