<div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Личные сообщения</h2>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('messages.send') }}">
                    @csrf
                    <label for="receiver_id">Кому:</label>
                    <select name="receiver_id" id="receiver_id">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="content">Message:</label>
                    <textarea name="content" id="content" rows="4"></textarea>
                    <br>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal" style="background-color: #0d6efd; color: #fff;">Отправить</button>
                </form>
            </div>
            <div class="container">
                <h1>Messages</h1>
                <ul>
                    @foreach ($messages as $message)
                        <li>
                            От: {{ $message->sender->name }}<br>
                            Кому: {{ $message->receiver->name }}<br>
                            {{ $message->content }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #0d6efd; color: #fff;">Закрыть</button>
            </div>
        </div>
    </div>
</div>





