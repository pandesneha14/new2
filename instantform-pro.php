<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .Submission {
        display: none;
    }

    .Submission h1 {
        color: #9abc66;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 27px;
        text-align: center;
        margin-bottom: 10px;
    }

    .Submission h2 {
        text-align: center;
        font-size: 30px;
    }

    .Submission p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 18px;
        /* margin-bottom: 55px; */
        /* margin: 0; */
        text-align: center;

    }

    .Submission i {

        color: #9ABC66;
        font-size: 51px;
        line-height: 96px;
        padding: 1px 27px;
        /*margin-left: -15px; */
    }

    .Submission {
        background: #e7f2fd;
        padding: 59px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        /*display: inline-block;*/

        box-shadow: 0px 0px 15px rgb(0 0 0 / 10%);

        margin: 0 auto;
    }

    .php-email-form {
        display: block;
    }

    .sumbit-btn {
        display: block;
        margin: 0px auto;
        border-radius: 50px;
        width: 55%;
        padding: 7px;
        background: #ffffff;
        box-shadow: 2px 3px 12px 2px #8ccaeb66;
        border: 2px solid #5a5af3;
    }

    .sumbit-btn:hover {
        background: #7272f5 !important;
        border-color: #7272f5 !important;
        color: #fff !important;
        font-weight: 600 !important;
    }
</style>
</head>
<body>


<main>
    <form action="contact.php" method="post" class="php-email-form" id="php-email-form"
        enctype="multipart/form-data" style="
    border-radius: 10px; padding: 20px 30px;">
        <h3 align="center">Get A Custom Quote</h3>
        <div class="row">
            <div class="col-md-6 form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
            </div>
            <div class="col-md-6 form-group mt-3">
                <select class="form-select" aria-label="Default select example" id="assessment">
                    <option selected="selected" value="Assessment">Assessment</option>
                    <option value="Article">Article</option>
                    <option value="Case Study">Case Study</option>
                    <option value="Coursework">Coursework</option>
                    <option value="Dissertation">Dissertation</option>
                    <option value="Proposal">Proposal</option>
                    <option value="Essay">Essay</option>
                    <option value="Literature Review">Literature Review</option>
                    <option value="Resume">Resume</option>
                    <option value="Problem-Solving">Problem-Solving</option>
                    <option value="Report">Report</option>
                    <option value="Research Paper">Research Paper</option>
                    <option value="Thesis">Thesis</option>
                    <option value="Term Paper">Term Paper</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
            </div>
            <div class="col-md-6 form-group mt-3">

                <select id="currency" aria-label="State" name="currency" class="form-select">
                    <option value="USD" selected="selected">$</option>
                    <option value="GBP">£</option>
                    <option value="EUR">€</option>
                </select>
                <span class="input-group budget">
                    <input type="text" class="form-control" placeholder="Budget"
                        aria-label="Amount (to the nearest dollar)" id="budget">
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-6 form-group mt-3">
                <div class="quant-style input-group tooltips">
                    <button class="cart-qty-minus input-group-text" type="button" value="-">-</button>
                    <input type="text" id="qty" name="qty" value="" class="qty form-control input-text qty"
                        maxlength="12" placeholder="Pages" />
                    <input type="hidden" id="qty_data" name="qty_data" value="" maxlength="12" placeholder="Pages" />
                    <button class="cart-qty-plus input-group-text" type="button" value="+">+</button>
                    <span class="tooltiptext">1 Pages : 250 Words</span>
                </div>
            </div>
            <div class="col-md-6  col-6  form-group mt-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">No Word Limit</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group mt-3 mobile-cover">
                <input id="code" name="code" type="hidden" aria-label="code" value="+1">
                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Your Number"
                    required="">
            </div>
            <div class="col-md-6 form-group deadline-cover mt-3">
                <div class="deadline-wraper">
                    <label for="deadline" style="display: block;"></label>
                    <input type="text" class="form-control" style="border-color: #ededed00;
    padding: 0;" autocomplete="off" name="nahdatepicker" id="nahdatepicker" data-date-format="dd/mm/yyyy"
                        data-language='en' placeholder="Deadline" required="">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group  mt-3 file-row">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="myfirstassignment">
                    <label class="form-check-label myfirstassignment-label" for="myfirstassignment">Get a Flat 10% Off
                        on First Booking</label>


                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 form-group  mt-3 file-row">
                <input name="filesname[]" aria-label="file" class="form-control" type="file" id="files" multiple>
            </div>
        </div>
        <div class="text-center submitInstantForm" style="margin-top:1.5rem"><button type="submit"
                id="submitInstantForm"><span>Submit</span></button>
        </div>
    </form>
</main>
<div class="Submission" id="Submission">
    <h1>Thank You</h1>
    <h2> For Your Response.</h2>

    <div style="border-radius: 200px;height: 100px;width: 100px;background: #F8FAF5;margin: 47px auto;">
        <i class="checkmark">✓</i>
    </div>
    <p>We will revert back soon!! Your information is 100% safe with us.</p>
    <!--<a  class="btn uza-btn btn-3" style="display: block;margin: 0 auto;width: 63%;">Done</a>-->
    <div class="mt-3">
        <a href="#" onclick="myContinue()" style="display: block;margin: 0 auto;width: 63%;"
            class="sumbit-btn btn">Done</a>

    </div>
</div>
</body>
</html>