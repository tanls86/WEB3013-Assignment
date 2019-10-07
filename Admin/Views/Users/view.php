<div class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-user">
                        <div class="image">
                            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
                                 alt="..."/>
                        </div>
                        <div class="content">
                            <div class="author">
                                <a href="#">
                                    <img class="avatar border-gray" src="assets/img/user/<?=$user['image']?>" alt="..."/>

                                    <h4 class="title"><?=$user['fullname']?><br/>
                                        <small><?=$user['email']?></small>
                                    </h4>
                                    <h6 class="title">Vai trò: <?php if($user['role']== 0){
                                        echo 'Admin';
                                        }else{
                                        echo "Member";
                                        }
                                        ?>
                                    </h6>
                                </a>
                            </div>
                            <p class="description text-center">Miêu tả: "Người này quá lười <br>
                                và chưa để lại miêu tả về bản thân
                            </p>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>