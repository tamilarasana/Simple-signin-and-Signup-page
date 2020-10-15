
            @if(session('success'))
                <div class ="alert alert-success">
                {{session::get('success')}}

                @php
                    Session::forget('success')
                @endphp
                </div>
            @endif

            {{-- @if(count($errors-> all()))
                <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>Oops! {{$error}}</li>
                    @endforeach
                </ul>
                </div>
                @endif--}}
               