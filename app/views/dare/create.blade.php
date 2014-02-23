@extends('layouts.master');

@section('content')

    @if($errors->count())
    <?php var_dump($errors); ?>
    @endif

    <main class="page">
        <div class="dare-create row">
            <div class="small-12 medium-7 large-8 column">
                <div class="page__box">
                    <header>
                        <h1 class="page__title"><small class="expand">Step 1 of 2:</small> Create your #YOLO dare</h1>
                        <p>Insert your basic dare details. Be creative on your dare but not offensive. Remember it's #YOLO not #DEADat21.</p>
                    </header>

                    {{ Form::open(array('url' => 'dare/submit', 'class' => 'create-dare-form row')) }}
                    <fieldset class="row collapse">
                        <h2 class="epsilon">Configure your donation</h2>

                        <div class="small-2 column">
                        {{ Form::text('donation_amount', '1', array('class' => 'big radius js-donation-amount')) }}
                        {{ Form::label('donation_amount', 'Donation Amount', array('class' => 'milli')) }}
                        </div>
                        <div class="small-1 column text-center">
                            <span class="create-dare-form__mathsymbol" aria-label="times">x</span>
                        </div>
                        <div class="small-2 column">
                        {{ Form::text('donation_quantity', '&infin;', array('class' => 'big radius js-donation-quantity')) }}
                        </div>
                        <div class="small-1 column text-center">
                            <span class="create-dare-form__mathsymbol" aria-label="equals">=</span>
                        </div>
                        <div class="small-4 column">
                        {{ Form::text('donation-total', '?', array('class' => 'big radius js-donation-total')) }}
                        </div>
                    </fieldset>

                    <fieldset>
                        <h2 class="epsilon">Create your dare</h2>

                        {{ Form::text('title', null, array('class' => 'radius', 'placeholder' => 'Insert your dare title&hellip;')) }}

                        {{ Form::textarea('excerpt', null, array(
                            'class' => 'radius',
                            'placeholder' => 'Insert your short description. Be short and sweet, just like a tweet&hellip;')) }}

                        {{ Form::select('category', array(
                            '' => 'Select a category'
                        )) }}

                        <div class="media-submission-fieldset">
                            <div class="create-date-form__media-submit">
                                <h3 class="create-dare-form__headline">Insert an example of your dare <small class="end zeta">(Optional)</small></h3>

                                <div class="row collapse">
                                    <div class="small-8 column">
                                        {{ Form::text('media-url', null, array('class' => 'radius js-media-url', 'placeholder' => 'Insert a video example&hellip;')) }}
                                    </div>
                                    <div class="small-4 column">
                                        <a href="#" class="button secondary postfix js-embed-media ">Preview</a>
                                    </div>
                                    <div class="small-12 column">
                                        <div class="text-center milli">
                                            You can insert links to videos from YouTube, Vine or Instragram.
                                        </div>
                                    </div>
                                </div>

                                <div class="create-dare-form__media-divider">
                                    <span class="round">or</span>
                                </div>

                                <ul class="create-dare-form__media-actions small-block-grid-2">
                                    <li class="file-input-replace">
                                        <a class="button secondary small expand" href="#">Upload a picture</a>
                                        <input class="button secondary small expand" id="dare-media" type="file" name="files[]" data-url="{{ URL::to('dare/media') }}">
                                    </li>
                                    <li>
                                        <a class="button secondary small expand" href="#">Choose a photo on Facebook</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="media-submission-upload" style="display:none;">
                                <div class="progress round">
                                  <span class="meter" style="width: 0"></span>
                                </div>
                            </div>

                            <div class="create-dare-form__media-preview" style="display:none;">
                                <h3 class="create-dare-form__headline">Insert an example of your dare <small class="end zeta">(Optional)</small></h3>
                                <div class="create-dare-form__media-preview-container">
                                    <div class="flag">
                                        <div class="flag__img">
                                            <img src="//placehold.it/100x100" alt="">
                                        </div>
                                        <div class="flag__body">
                                            picture_file_name.jpg
                                            <a href="#" class="js-media-cancel" aria-label="Cancel">x</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr>
                        {{ Form::hidden('media-picture', null, array('class' => 'big js-media-picture-url')) }}

                        <div class="show-for-small-only">
                        {{ Form::submit('Next Step: PayPal details', array('class' => 'button expand')) }}
                        </div>
                        <div class="show-for-medium-up">
                        {{ Form::submit('Next Step: Insert your PayPal details', array('class' => 'button right')) }}
                        </div>
                    </fieldset>

                    {{ Form::close() }}
                </div>
            </div>

            <div class="medium-5 large-4 column js-sticky">
                <blockquote class="dare-preview">
                    <p>I pledge to donate <strong>$5 dollars</strong> for every person that <strong>swallows a spoonful of cinnamon</strong> for <strong>Paws for You Rescue.</strong></p>
                    <footer class="flag">
                        <div class="flag__img">
                            <img src="{{ Auth::user()->services()->first()->service_picture}}" alt="" width="50">
                        </div>
                        <div class="author flag__body">
                            <cite class="author__name">{{Auth::user()->name}}</cite>
                            <span class="author__location">Miami, FL</span>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </main>
@show
