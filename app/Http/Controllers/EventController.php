<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function __construct()
    {
        // アクションに合わせたpolicyのメソッドで認可されていないユーザーはエラーを投げる
        $this->authorizeResource(Event::class, 'event');
    }
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Auth::user()->events;
        return view('events.index')->with(compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $event = new Event($request->all());
        $event->user_id = $request->user()->id;

        // 登録
        $event->save();

        return redirect()
            ->route('events.show', $event)
            ->with('notice', '予定を登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show')->with(compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit')->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
         $event->fill($request->all());

        $event->save();

        return redirect()
            ->route('events.show', $event)
            ->with('notice', '予定を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()
            ->route('events.index')
            ->with('notice', '予定を更新しました');
    }
}
