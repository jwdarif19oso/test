<?php

/*
 * Template Name: Gift Card Checkout
 */
get_header('contact');
?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#recipent-phone').hide();
            $('input:radio[name="email"]').change(
                function () {
                    if ($(this).val() == 'email') {
                        $('#recipent-phone').hide();
                        $('#recipent-email').show();
                    } else {
                        $('#recipent-phone').show();
                        $('#recipent-email').hide();
                    }
                });
//        $(function () {
//            $('#datetimepicker1').datepicker();
//        });
        });
    </script>

    <div class="form-section paddingbottom30" id="cards_form">
        <div class="container paddingsmlr0">
            <div class="row paddingsmlr0">
                <div class="form-left-container paddingsmlr0">
                    <div class="form-left">
                        <p class=" GIFT-CARD-DETAILS text-center"> Gift Card Details</p>
                        <div class="form-fields">
                            <form>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label">Delivery Method</label>
                                    <div class="col-sm-8">
                                        <div class="radio">
                                            <label class="paddinglr10 Form-label--tick">
                                                <input type="radio" value="email" name="email" id="checkboxG1" class="Form-label-radio" checked="checked">
                                                <span for="checkboxG1" class="Form-label-text">E-mail</span>
                                            </label>
                                            <label class="paddinglr10 Form-label--tick">
                                                <input type="radio" value="message" id="checkboxG1" name="email" class="Form-label-radio">
                                                <span for="checkboxG1" class="Form-label-text">Text message</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-4  col-form-label">Recipent Name</label>
                                    <div class="col-sm-8">
                                        <input class="form-control text" type="text" name="text" id="recipent-name">
                                    </div>
                                </div>
                                <div id="recipent-email" class="form-group row">
                                    <label for="example-email-input" class="col-sm-4 col-form-label"> Recipent
                                        Email</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="email" name="recipent-email"
                                               id="recipent-email">
                                    </div>
                                </div>
                                <div id="recipent-phone" class="form-group row">
                                    <label for="example-email-input" class="col-sm-4 col-form-label">Recipent
                                        Phone</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="tel" name="recipent-phone"
                                               id="recipent-phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-4 col-form-label">Sender's
                                        Name</label>
                                    <div class="col-sm-8">
                                        <input class="form-control text" class="text" name="sname" id="sender-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-4 col-form-label">Sender's
                                        Email</label>
                                    <div class="col-sm-8">
                                        <input class="form-control text" class="email" name="semail" id="sender-email">
                                    </div>
                                </div>
                                <div id="sendermessage" class="form-group row">
                                    <label for="example-email-input" class="col-sm-4 col-form-label">Text
                                        Message</label>
                                    <div class="col-sm-8">
                                        <input class="form-control text" type="text" name="sender-message"
                                               id="sender-message">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-time-input" class="col-sm-4 col-form-label">Delivery
                                        Date</label>
                                    <div class="col-sm-8 date">
                                        <div class="input-group">

                                            <input class="form-control text" id="date" name="date"
                                                   placeholder="MM/DD/YYYY" type="text"/>
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar">
                                                </i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-time-input" class="col-sm-4 col-form-label">Message</label>
                                    <div class="col-sm-8">
                                        <textarea class="message" width="100%" id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <h3 class="PAYMENT-DETAILS ">PAYMENT DETAILS</h3>
                                    </div>
                                </div>
                                <div class="form-group row margintop25">
                                    <label class="col-sm-4 control-label" for="card-number">Card Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control card" name="card-number" id="card-number"
                                               placeholder="Debit/Credit Card Number">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-md-8 col-sm-12 col-xs-12 ">
                                        <div class="col-sm-4 col-xs-12 paddinglr0 ">
                                            <label class=" control-label" for="expiry-month">Expiration Date</label>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12 paddingsmlr0  expirydate">
                                            <div class="col-md-7 col-sm-12 col-xs-12 paddingsmlr0  month">
                                                <select class="form-control col-sm-2" name="expiry-month"
                                                        id="expiry-month">
                                                    <option>Month</option>
                                                    <option value="01">Jan (01)</option>
                                                    <option value="02">Feb (02)</option>
                                                    <option value="03">Mar (03)</option>
                                                    <option value="04">Apr (04)</option>
                                                    <option value="05">May (05)</option>
                                                    <option value="06">June (06)</option>
                                                    <option value="07">July (07)</option>
                                                    <option value="08">Aug (08)</option>
                                                    <option value="09">Sep (09)</option>
                                                    <option value="10">Oct (10)</option>
                                                    <option value="11">Nov (11)</option>
                                                    <option value="12">Dec (12)</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5 col-sm-12 col-xs-12 paddinglr0 year">
                                                <select class="form-control" name="expiry-year">
                                                    <option value="13">2013</option>
                                                    <option value="14">2014</option>
                                                    <option value="15">2015</option>
                                                    <option value="16">2016</option>
                                                    <option value="17">2017</option>
                                                    <option value="18">2018</option>
                                                    <option value="19">2019</option>
                                                    <option value="20">2020</option>
                                                    <option value="21">2021</option>
                                                    <option value="22">2022</option>
                                                    <option value="23">2023</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 paddinglr0">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label class=" control-label" for="cvv"> CVV</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control card" name="cvv" id="cvv"
                                                       placeholder="Security Code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-block btn-success order-btn">Place Order</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="form-right-container paddingsmlr0">
                    <div class="form-right">
                        <p class="Order-Summary">Order Summary</p>
                        <p class="Single-session-gift">Single Session Gift</p>
                        <div style="margin-top:40px">
                            <p class="pull-left">Total</p>
                            <p class=" pull-right">$69</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>