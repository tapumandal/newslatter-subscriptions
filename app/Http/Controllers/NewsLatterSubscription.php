<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Subscription\EmailRepository;
use App\Subscriber;
use Illuminate\Http\Request;

class NewsLatterSubscription extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$emailRepo = new EmailRepository(new Subscriber);

		return view('subscriber_list',
			[
				'subscribers' => $emailRepo->index(),
			]
		);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return 'create';
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$store = new EmailRepository(new Subscriber);

		return $store->store($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Subscriber  $subscriber
	 * @return \Illuminate\Http\Response
	 */
	public function show(Subscriber $subscriber) {
		return 'show';
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Subscriber  $subscriber
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Subscriber $subscriber) {
		return 'edit';
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Subscriber  $subscriber
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Subscriber $subscriber) {
		return 'update';
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Subscriber  $subscriber
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Subscriber $subscriber) {
		return 'destroy';
		//
	}
}
