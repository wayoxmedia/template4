<!-- Footer Start -->
<div class="container-fluid bg-img text-secondary" style="margin-top: 90px">
  <div class="container">
    <div class="row gx-5">
      <div class="col-lg-4 col-md-6 mb-lg-n5">
        <div
          class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
          <form method="post"
               id="subscribeForm">
                <label for="selAddressType"></label>
                  <select id="selAddressType" name="selAddressType" class="form-select bg-primary text-white sans-serif" aria-label="Default select example">
                    <option selected>Select Subscription</option>
                    <option value="e"><?= TXT_EMAIL?></option>
                    <option value="p"><?= TXT_PHONE?></option>
                  </select>
                <div class="input-group">
                  <input type="text"
                  id="iptAddress"
                  name="iptAddress"
                  class="form-control border-white p-3 form-control "
                  placeholder="">
                  <button type='submit' class="btn btn-primary" id="btnSubmitSubscribe"><?= TXT_SIGN_UP?></button>
                </div>
              </form>
               <div class="subscribe-footer pb-3">
                <div class="row">
                  <div class="col"></div>
                  <div class="col-auto">
                    <p class="mt-4 d-none" id="pMessage"></p>
                    <ul class="mt-3 d-none" id="ulErrors"></ul>
                  </div>
                  <div class="col"></div>
                </div>
              </div>
        </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <div class="row gx-5">
            <div class="col-lg-4 col-md-12 pt-5 mb-5">
              <h4 class="text-primary text-uppercase mb-4"><?= TXT_GET_IN_TOUCH;?></h4>
              <div class="d-flex mb-2">
                <i class="bi bi-geo-alt text-primary me-2"></i>
                <p class="mb-0"><?= TXT_ADDRESS;?></p>
              </div>
              <div class="d-flex mb-2">
                <i class="bi bi-envelope-open text-primary me-2"></i>
                <p class="mb-0"><?= TXT_EMAIL_US2;?></p>
              </div>
              <div class="d-flex mb-2">
                <i class="bi bi-telephone text-primary me-2"></i>
                <p class="mb-0"><?= PHONE_NUMBER;?></p>
              </div>
              <div class="d-flex mt-4">
                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i
                  class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i
                  class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i
                  class="fab fa-linkedin-in fw-normal"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
              <h4 class="text-primary text-uppercase mb-4"><?= TXT_QUICK_LINKS;?></h4>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="#"><i
                  class="bi bi-arrow-right text-primary me-2"></i><?= TXT_HOME2?></a>
                <a class="text-secondary mb-2" href="#"><i
                  class="bi bi-arrow-right text-primary me-2"></i><?= TXT_ABOUT2;?></a>
                <a class="text-secondary mb-2" href="#"><i
                  class="bi bi-arrow-right text-primary me-2"></i><?= TXT_OUR_SERVICES2;?></a>
                <a class="text-secondary mb-2" href="#"><i
                  class="bi bi-arrow-right text-primary me-2"></i><?= TXT_MEET_THE_TEAM2;?></a>
                <a class="text-secondary mb-2" href="#"><i
                  class="bi bi-arrow-right text-primary me-2"></i><?= TXT_LATEST_BLOG;?></a>
                <a class="text-secondary" href="#"><i
                  class="bi bi-arrow-right text-primary me-2"></i><?= TXT_CONTACT;?></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
              <h4 class="text-primary text-uppercase mb-4"><?= TXT_NEWSLETTER;?></h4>
              <p><?= TXT_PARAGRAPH_NEWSLETTER;?></p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="container-fluid text-secondary py-4" style="background: #111111;">
  <div class="container text-center">
    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"><?= SITE_NAME;
    ?></a><?= TXT_ALL_RIGHTS_RESERVED;?>.
    </p>
    <br><?= TXT_DISTRIBUTED_BY2?> <?= TXT_DISTRIBUTED_BY;?> <a class="border-bottom" href="<?= SITE_DISTRIBUTED;?>"
                                                            target="_blank"><?= SITE_DISTRIBUTED;?></a>
  </div>
</div>
<!-- Footer End -->
