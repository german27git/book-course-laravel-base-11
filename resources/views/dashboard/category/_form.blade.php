@csrf

        <label for="">Title</Title></label>
        <input type="text" name="title" value="{{ old('title',$category->title)}}">

        <label for="">Slug</Title></label>
        <input type="text" name="slug" value="{{old('slug',$category->slug)}}">


        <button type="submit">Send</button>