@extends('master.index') @section('content')
<section class="slice slice-lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-5 text-center">
                    <span class="badge badge-success badge-pill badge-lg">
                        Ask a question
                    </span>
                    <h3 class=" mt-4">Ask a question</h3>
                    <div class="text-center mt-3">
                        <p class="lead lh-180">Customization has never been easier. Purpose has all the right tools in order to make your website building process a breeze.</p>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Body</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Question</button>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script>
    new Vue({
        el: "#app",
        data: {
            tag: '',
            tags: [],
            message: 'Hello world',
        },
    })
</script>
@endpush