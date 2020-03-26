@extends('layouts/homelayout')

@section('content')

<section class="mainContent clearfix blogPage singleBlog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="thumbnail">
            <img src="{{ asset('img/blog/hbd.jpeg') }}" alt="blog-image">
            <div class="caption">
              <div class="row">
                <div class="col-md-3 order-md-12">
                  <h5>Article</h5>
                  <ul class="list-unstyled">
                    <li>
                      <i class="fa fa-user" aria-hidden="true"></i>Gagas Hakiki</li>
                    <li>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Feb 12, 2020</li>
                    {{-- <li>
                      <i class="fa fa-tags" aria-hidden="true"></i>Travel</li> --}}
                  </ul>
                  {{-- <h5>Share</h5>
                  <ul class="list-inline">
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul> --}}
                </div>
                <div class="col-md-9 order-md-1 text-justify">
                  <h3>5 Tips Merencanakan Sweet Seventeen </h3>
                  <p>Bagi remaja putri, Sweet Seventeen Birthday Party merupakan transisi untuk menjadi dewasa, dan dianggap kedua pentingnya setelah resepsi pernikahan. Itulah sebabnya merencanakan pesta ulang tahun Sweet Seventeen adalah sesuatu yang tidak boleh dianggap remeh dengan pesta ulang tahun lainnya.
                    Berikut ini adalah to-do-list untuk para perencana birthday party:
                    2 Bulan Sebelum pesta
                    Merencanakan pesta Sweet Seventeen mengambil banyak waktu tergantung pada sebagaimana perincian yang kamu inginkan untuk pesta tersebut.
                    <ul class="list-unstyled">
                    <li>1. Tentukan tanggal. Tanggal untuk party Sweet Seventeen tidak harus tepat pada hari ulang tahun. Kamu perlu mempertimbangkan tanggal liburan dan jadwal kamu (contoh: tidak pada waktu ujian sekolah).</li>
                    <br>
                    <li>2. Pilih tempat untuk mengadakan pesta. Memilih lokasi untuk sebuah pesta bukanlah hal yang mudah. kamu perlu memperhitungkan berapa banyak tamu yang akan diundang, tentu saja memperhitungkan juga anggaran kamu. Selain mengadakan pesta ulang tahun di Ballroom hotel, Anda juga dapat menggunakan halaman rumah, taman lokal, atau restaurant tertentu.</li>
                    <br>
                    <li>3. Tentukan tamu yang akan diundang. Beberapa orang hanya ingin mengundang teman dekat (private event), namun ada juga yang ingin mengundang semua teman-temannya. Maka dari itu, sangat diperlukan untuk menentukan daftar tamu.</li>
                    <br>
                    <li>4. Tentukan design kartu undangan dan vendor yang akan melakukan pencetakan kartu undangan ulang tahun.</li>
                    <br>
                    <li>5. Memiliki seseorang untuk mengambil dokumentasi di hari pesta sweet seventeen akan sangat membantu kamu dalam mengingat kemeriahan pesta kamu. Putuskan apakah kamu akan menyewa fotografer professional, atau akan meminta bantuan sanak saudara untuk membantu dalam proses pengabadian pesta kamu. Apabila ingin menggunakan jasa fotografi professional, cobalah untuk melihat album foto yang pernah dibuat sebelumnya oleh mereka supaya kamu dapat menentukan fotografi mana yang akan kamu pilih.</li>
                    </ul>
                    <br>
                  </p>
                    <br>
                  <p>
                    <br>
                    2-4 Minggu sebelum Pesta Dalam waktu ini kamu harus mengurus perencanaan lebih detail jangan ragu untuk meminta bantuan dari orang-orang terdekat, jika memerlukan bantuan mereka.
                    <ul class="list-unstyled">
                    <li>1. Pilihlah tema yang akan membuat sweet seventeen party ini tidak terlupakan</li>
                    <li>2. Anggaran / budget yang sesuai dengan kamu, karena jika ingin dilakukan di Ballroom hotel / restaurant, anggaran untuk makanan akan menjadi yang paling besar</li>
                    <li>3. Jangan lupa untuk memesan kue ulang tahun</li>
                    <li>4.Rencanakanlah beberapa permainan untuk menghibur tamu yang hadir</li>
                    <li>5. Jika ingin lebih menarik lagi, sewa DJ untuk memainkan lagu-lagu favorit kamu dan teman-teman. Dijamin mereka akan bersenang-senang dan menikmati pesta kamu</li>
                    <li>6. Baju Pesta dan Make up. Memilih baju pesta yang akan digunakan sangatlah penting. Sesuaikanlah baju pesta dan make up kamu dengan tema dari pesta. Cobalah untuk memilih gaun dengan warna yang membuat kamu stand out daripada tamu-tamu yang akan datang.</li>
                    <li>7. Pembawa lilin. Pada umumnya di pesta sweet seventeen kamu bisa mengajak beberapa teman dekat kamu sebagai pembawa lilin dan tanyakan apakah mereka bersedia untuk membantu.Demikian Tips menyelenggarakan pesta sweet seventeen. Semoga bermanfaat dalam perencanaan event kamu 🙂</li>
                    </ul>
                  </p>
                  <br>
                   
                </div>
              </div>
            </div>
            {{-- <ul class="pager">
              <li class="previous">
                <a href="#">previous</a>
              </li>
              <li class="next float-right">
                <a href="#">next</a>
              </li>
            </ul>
            <div class="commentsArea">
              <h3>4 Comments</h3>
              <div class="media flex-wrap">
                <a class="media-left" href="#">
                  <img class="media-object" src="img/blog/avatar.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Jessica Brown </h4>
                  <h4>
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</span>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <button class="btn btn-link" type="submit">Reply</button>
                </div>
              </div>
              <div class="media flex-wrap">
                <a class="media-left" href="#">
                  <img class="media-object" src="img/blog/avatar.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Jessica Brown </h4>
                  <h4>
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</span>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <button class="btn btn-link" type="submit">Reply</button>
                  <div class="media flex-wrap">
                    <a class="media-left" href="#">
                      <img class="media-object" src="img/blog/avatar.jpg" alt="Image">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Jessica Brown </h4>
                      <h4>
                        <span>
                          <i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</span>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                      <button class="btn btn-link" type="submit">Reply</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media flex-wrap">
                <a class="media-left" href="#">
                  <img class="media-object" src="img/blog/avatar.jpg" alt="Image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Jessica Brown </h4>
                  <h4>
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Mar 20, 2016</span>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <button class="btn btn-link" type="submit">Reply</button>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      {{-- <div class="row">
        <div class="col-md-12">
          <form action="" method="POST" role="form" class="commentsForm">
            <h3>Leave Comments</h3>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="email" class="form-control" id="" placeholder="Email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Website">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Comment"></textarea>
                </div>
              </div>
  
            </div>
            <button type="submit" class="btn btn-primary">post comment</button>
          </form>
        </div>
      </div> --}}
    </div>
  </section>
    
@endsection
