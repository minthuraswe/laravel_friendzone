<section class="sec-header-bg">
    <div class="container pt-5 pb-5">
        <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="fz welcome-fz">Our Client Reviews</h2>
        </div></div>
        <div class="row mt-5">
            @foreach ($usermessage as $item)
            <div class="col-md-6">
                <div class="card mb-4" style="background-color:#000000;border:1px solid #787878">
                    <h5 class="card-header bg-transparent text-light">{{$item->username}}</h5>
                    <div class="card-body text-warning">
                      <p class="card-text">{{$item->usermessage}}</p>
                    </div>
                    <div class="card-footer bg-transparent" style="border-top:1px solid #787878;color:#787878;">{{$item->updated_at->diffForHumans()}}</div>
                  </div>
            </div>
             @endforeach
        </div>
    </div>
</section>