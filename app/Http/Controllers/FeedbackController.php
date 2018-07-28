<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    protected $feedback;

    public function __construct(Feedback $feedback)
    {
        $this->feedback = $feedback;

        $this->middleware('auth')->only('showFeedbacks');
    }

    public function index()
    {
        return view('feedback');
    }

    /**
     * Get a validator for an incoming feedback request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'message' => 'required|string|min:20|max:255',
        ]);
    }

    /**
     * Create a new feedback instance after a valid login.
     *
     * @param  array  $data
     * @return \App\Feedback
     */
    public function store(Request $request)
    {
        // env('RECAPTCHA_SECRET') - получение секретного ключа рекапчи
        if ($request->has('user_id')) {
            // Feedback'у присвоим юзера
            Feedback::create([
                'user_id' => $request->get('user_id'),
                'message' => $request->get('message'),
            ]); // Mass Assignment
        } else {
            // аноним
            Feedback::create([
                'firstname' => $request->get('firstname'),
                'email' => $request->get('email'),
                'message' => $request->get('message'),
            ]);
        }

        return redirect()->route('feedbacks.list');
    }

    public function showFeedbacks() {
        $feedbacks = Feedback::all();
        return view('listfeedbacks', [
            'feedbacks' => $feedbacks,
        ]);
    }

}
