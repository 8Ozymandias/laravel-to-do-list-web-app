@if ($errors->any())
         <div class="notification is-danger">
        
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        
         </div>
      @endif