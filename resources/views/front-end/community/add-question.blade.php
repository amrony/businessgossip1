@extends('profile.master')

@push('css')
@endpush

@section('body')
  <section id="sec_two" class="section section-intro context-dark">
      <div class="intro-bg" style="background: url({{ asset('back-end/images') }}/intro-bg-1.jpg) no-repeat;background-size:cover;background-position: top center; "></div>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-8 text-center">
                  <h1 class="font-weight-bold wow fadeInLeft">All Content</h1>
                  <p class="intro-description wow fadeInRight">Feel free to learn more about our team and company on this page.
                      We are always happy to help you!</p>
              </div>
          </div>
      </div>
  </section>

    <section class="block-center">
        <div class="main-question">
            <div class="set mt50 ask-q">
                <div class="block w320-12 w768-10 w768-offset-1 w1100-8 w1100-offset-2 mb200"><div class="content">
                    <div class="tile profile-content">
                        <div class="tile-content">
                            <br>
                            <h2 class="text-center" style="color: green">{{ Session::get('message') }}</h2>
{{--                            <div class="alert alert-success hide">Form submitted successfully</div>--}}

                            <form action="{{ route('community.store') }}" method="post" style="padding: 25px;">
                                @csrf
                                <div>
                                    <label for="question" class="required">Question*</label>
                                    <input type="text" name="question" required="required">
                                </div>
                                <div>
                                    <label for="description" class="required">Description*</label>
                                    <textarea required="required" name="description"></textarea>
                                </div>

                                <div>
                                    <label for="article_category_id" class="required">Category*</label>
                                    <select required="required" name="article_category_id">
                                        <option value="0" selected="selected">Please Select A Category</option>
                                        @foreach($articleCategories as $articleCategory)
                                        <option value="{{ $articleCategory->id }}">{{ $articleCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="article_sub_category_id" class="required">Subcategory*</label>
                                    <select required="required" name="article_sub_category_id">
                                        <option value="0" selected="selected">Please Select A
                                            Subcategory</option>
                                        @foreach($articleSubcategories as $articleSubcategory)
                                        <option value="{{ $articleSubcategory->id }}">{{ $articleSubcategory->name}}</option>
                                        @endforeach
                                    </select></div>

                                <div>
                                    <label for="question_tags">Tags</label>
                                    <input type="text" name="tag"></div>
                                <br>
                                <div>
                                    <button type="submit" id="tabOneSubmit" class="action medium color1 mt100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('js')

@endsection


