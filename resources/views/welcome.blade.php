<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>

<ul style="color: red;">
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
</ul>
@if(session('sent'))
    <p style="color: green;">Sent!</p>
@endif
<form method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}"><br/>
    <textarea name="description" placeholder="description">{{ old('description') }}</textarea><br/>
    <button type="submit">Send</button>
</form>

<h1>Vapor bug</h1>
<p>The validation errors dont show up when there is a lot of data in the post request. This is an example.</p>
<p>First just click <strong>Send</strong>, it will show the validation error.</p>
<p>Now add for example the <strong>lorem ipsum text to the textarea</strong> and click <strong>Send</strong> again, it wont show the validation error.</p>

<p><i>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum enim et augue sagittis, quis congue ante posuere. Mauris aliquam, sem at lobortis lacinia, dolor turpis ultricies tellus, sed vestibulum mi eros vitae lorem. Nunc sed malesuada nunc. Mauris orci massa, dapibus in augue congue, cursus pulvinar metus. Ut posuere, nibh ac egestas finibus, neque nulla feugiat nisl, non vulputate massa risus a velit. Fusce maximus lacus eu nibh dictum efficitur. Fusce vitae efficitur arcu, condimentum varius elit. Donec eget ipsum vel lorem pretium venenatis id vitae velit. Donec maximus augue in erat rhoncus, et scelerisque risus semper. Nunc eu rutrum justo. Quisque cursus libero id lectus consequat molestie. Sed justo odio, rutrum vel ultricies vitae, dignissim ut augue. Duis at metus nec augue cursus sagittis. Vivamus finibus, dolor id tempus facilisis, justo urna interdum nulla, interdum gravida mi augue sed odio. Cras sit amet congue libero, et facilisis diam.

Sed efficitur, nunc ut hendrerit hendrerit, massa odio finibus magna, in semper lorem ex quis elit. Aliquam lobortis erat lorem, quis finibus augue luctus at. Aenean egestas velit tempus ipsum ullamcorper tempor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dapibus bibendum consectetur. Suspendisse tristique dapibus libero, ut aliquet diam pellentesque at. Donec vel sollicitudin lectus. Ut at nibh dui. Nulla facilisi. Nam eleifend fermentum suscipit. Ut vitae lorem arcu. Phasellus semper sapien erat.
    </i></p>

<p>Repo: <a target="_blank" href="https://github.com/sweebee/Test">https://github.com/sweebee/Test</a></p>
</body>
</html>
