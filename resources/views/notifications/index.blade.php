<?php

@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Notifications</h2>
        <ul class="list-group">
            @forelse ($notifications as $notification)
                <li class="list-group-item {{ $notification->read_at ? 'read' : 'unread' }}">
                    {{ $notification->message }}
                    @if (!$notification->read_at)
                        <form action="{{ route('notifications.markAsRead', $notification->id) }}" method="POST" class="float-right">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">Mark as Read</button>
                        </form>
                    @endif
                </li>
            @empty
                <li class="list-group-item">No notifications</li>
            @endforelse
        </ul>
    </div>
@endsection
