<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    {{$alert->content}}
    <br>
    {{$alert->username}}
    <br>
    
    <form action="/alert/1" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH" />
        <input type="text" name='content' id='content' />
        <input type="text" name='username' id='username' />
        <button>SEND</button>
    </form>
</div>
