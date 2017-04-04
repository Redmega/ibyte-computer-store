@extends('layouts.default')
@section('content')
<h1 class="header center orange-text">Ok, we'll help you out!</h1>
<div class="row center">
    <h5 class="header col s12 light">Take the quiz to determine the best PC for you.</h5>
</div>
<div class ="container">
    <div class="section">
        <div class="row">
            <div class = "col s6 input-field">

                <form action="#">
                    <br>
                    <p>
                        <input name="question1" type="checkbox" id="office" />
                        <label for="office">Office/Work</label>
                    </p>
                    <p>
                        <input name="question1" type="checkbox" id="school" />
                        <label for="school">School</label>
                    </p>
                    <p>
                        <input name="question1" type="checkbox" id="graphic" />
                        <label for="graphic">Graphic Design/Video Editing</label>
                    </p>
                    <p>
                        <input name="question1" type="checkbox" id="gaming" />
                        <label for="gaming">Gaming</label>
                    </p>

                    <p>
                        <label> Is the computer for</label>
                    </p>
                </form>

            </div>
            <div class = "col s6 input-field">

                <form action="#">
                    <br>
                    <p>
                        <input class="with-gap" name="question2" type="radio" id="AMD" />
                        <label for="AMD">AMD</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question2" type="radio" id="Intel" />
                        <label for="Intel">Intel</label>
                    </p>
                    <p>
                        <label> AMD or Intel?</label>
                    </p>
                </form>

            </div>



        </div>
        <div class ="row">
            <div class ="col s6 offset-s2">
                <label>Check all that apply.</label>
            </div>
        </div>

    </div>
</div>

<div class ="container">
    <div class="section">
        <div class="row">
            <div class = "col s6 input-field">

                <form action="#">
                    <br>
                    <p>
                        <input class="with-gap" name="question3" type="radio" id="1TB" />
                        <label for="1TB">1TB</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question3" type="radio" id="2TB" />
                        <label for="2TB">2TB</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question3" type="radio" id="3TB" />
                        <label for="3TB">3TB</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question3" type="radio" id="4TB" />
                        <label for="4TB">4TB</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question3" type="radio" id="5TB" />
                        <label for="5TB">5TB</label>
                    </p>
                    <p>
                        <label> How much storage space will be needed for your computer?</label>
                    </p>
                </form>

            </div>
            <div class = "col s6 input-field">
                <form action="#">
                    <br>
                    <p>
                        <input class="with-gap" name="question4" type="radio" id="12inch" />
                        <label for="12inch">10-12inch</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question4" type="radio" id="14inch" />
                        <label for="14inch">13-14inch</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question4" type="radio" id="16inch" />
                        <label for="16inch">15-16inch</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question4" type="radio" id="18inch" />
                        <label for="17inch">17-18inch</label>
                    </p>
                    <p>
                        <label> Screen Size Preference?</label>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<div class ="container">
    <div class="section">
        <div class="row">
            <div class = "col s6 input-field">

                <form action="#">
                    <br>
                    <p>
                        <input class="with-gap" name="question5" type="radio" id="small"/>
                        <label for="small">Small</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question5" type="radio" id="medium"/>
                        <label for="medium">Medium</label>
                    </p>
                    <p>
                        <input class="with-gap" name="question5" type="radio" id="large"/>
                        <label for="large">Large</label>
                    </p>
                    <p>
                        <label>Preferable size computer case.</label>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<div class ="container">
    <div class="section">
        <div class="row">

            <div class = "row">
                <div class = "col s12 center-align ">
                    <a class="waves-effect wave-light btn"><i class = "material-icons left">send</i><span>SUBMIT</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
