<x-applayout>

    <section class="section  dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title display-1">Aduan KITA</h2>

                                <p class="text-black">Situs ini merupakan sarana yang aman dan terpercaya untuk
                                    menyampaikan
                                    aspirasi dan
                                    laporan Anda. Aduan Anda akan ditangani dengan cepat dan profesional oleh tim kami
                                    yang
                                    berdedikasi. Kami berkomitmen untuk transparansi dan akuntabilitas dalam penanganan
                                    aduan.
                                    Aduan
                                    Anda adalah langkah awal menuju perbaikan. Mari bersama-sama membangun masyarakat
                                    yang lebih
                                    baik. </p>
                            </div>
                        </div>
                    </div>


                    @guest
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pendaftaran Pelapor <br>
                                        Apakah ada konten yang ingin Anda adukan ? silakan daftar dibawah ini.</h5>

                                    <form class="row g-3">
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName"
                                                    placeholder="Your Name">
                                                <label for="floatingName">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingEmail"
                                                    placeholder="Your Email">
                                                <label for="floatingEmail">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPassword"
                                                    placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                                <label for="floatingTextarea">Address</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingCity"
                                                        placeholder="City">
                                                    <label for="floatingCity">City</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="floatingSelect" aria-label="State">
                                                    <option selected="">New York</option>
                                                    <option value="1">Oregon</option>
                                                    <option value="2">DC</option>
                                                </select>
                                                <label for="floatingSelect">State</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingZip"
                                                    placeholder="Zip">
                                                <label for="floatingZip">Zip</label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endguest

                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                <div
                                    class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                    <div class="datatable-top">
                                        <div class="datatable-dropdown">
                                            <label>
                                                <select class="datatable-selector">
                                                    <option value="5">5</option>
                                                    <option value="10" selected="">10</option>
                                                    <option value="15">15</option>
                                                    <option value="-1">All</option>
                                                </select> entries per page
                                            </label>
                                        </div>
                                        <div class="datatable-search">
                                            <input class="datatable-input" placeholder="Search..." type="search"
                                                title="Search within table">
                                        </div>
                                    </div>
                                    <div class="datatable-container">
                                        <table class="table table-borderless datatable datatable-table">
                                            <thead>
                                                <tr>
                                                    <th data-sortable="true" style="width: 10.714285714285714%;">
                                                        <button class="datatable-sorter">#</button>
                                                    </th>
                                                    <th data-sortable="true" style="width: 23.511904761904763%;">
                                                        <button class="datatable-sorter">Customer</button>
                                                    </th>
                                                    <th data-sortable="true" style="width: 39.285714285714285%;">
                                                        <button class="datatable-sorter">Product</button>
                                                    </th>
                                                    <th data-sortable="true" style="width: 11.755952380952381%;">
                                                        <button class="datatable-sorter">Price</button>
                                                    </th>
                                                    <th data-sortable="true" class="red"
                                                        style="width: 14.732142857142858%;"><button
                                                            class="datatable-sorter">Status</button></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-index="0">
                                                    <td><a href="#">#2457</a></td>
                                                    <td>Brandon Jacob</td>
                                                    <td><a href="#" class="text-primary">At praesentium minu</a>
                                                    </td>
                                                    <td>$64</td>
                                                    <td class="green"><span class="badge bg-success">Approved</span>
                                                    </td>
                                                </tr>
                                                <tr data-index="1">
                                                    <td><a href="#">#2147</a></td>
                                                    <td>Bridie Kessler</td>
                                                    <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                                            similique</a></td>
                                                    <td>$47</td>
                                                    <td class="green"><span class="badge bg-warning">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr data-index="2">
                                                    <td><a href="#">#2049</a></td>
                                                    <td>Ashleigh Langosh</td>
                                                    <td><a href="#" class="text-primary">At recusandae
                                                            consectetur</a></td>
                                                    <td>$147</td>
                                                    <td class="green"><span class="badge bg-success">Approved</span>
                                                    </td>
                                                </tr>
                                                <tr data-index="3">
                                                    <td><a href="#">#2644</a></td>
                                                    <td>Angus Grady</td>
                                                    <td><a href="#" class="text-primar">Ut voluptatem id earum
                                                            et</a></td>
                                                    <td>$67</td>
                                                    <td class="green"><span class="badge bg-danger">Rejected</span>
                                                    </td>
                                                </tr>
                                                <tr data-index="4">
                                                    <td><a href="#">#2644</a></td>
                                                    <td>Raheem Lehner</td>
                                                    <td><a href="#" class="text-primary">Sunt similique
                                                            distinctio</a></td>
                                                    <td>$165</td>
                                                    <td class="green"><span class="badge bg-success">Approved</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="datatable-bottom">
                                        <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                                        <nav class="datatable-pagination">
                                            <ul class="datatable-pagination-list"></ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Statistik Aduan <span>| Today</span></h5>

                        <div id="trafficChart"
                            style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                            class="echart" _echarts_instance_="ec_1703321642711">
                            <div
                                style="position: relative; width: 304px; height: 400px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                <canvas data-zr-dom-id="zr_0" width="608" height="800"
                                    style="position: absolute; left: 0px; top: 0px; width: 304px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                            </div>
                            <div class=""
                                style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, transform 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(255, 255, 255); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px sans-serif; padding: 10px; top: 0px; left: 0px; transform: translate3d(106px, 132px, 0px); border-color: rgb(238, 102, 102); pointer-events: none; visibility: hidden; opacity: 0;">
                                <div style="margin: 0px 0 0;line-height:1;">
                                    <div style="font-size:14px;color:#666;font-weight:400;line-height:1;">
                                        Access
                                        From</div>
                                    <div style="margin: 10px 0 0;line-height:1;">
                                        <div style="margin: 0px 0 0;line-height:1;"><span
                                                style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#ee6666;"></span><span
                                                style="font-size:14px;color:#666;font-weight:400;margin-left:2px">Union
                                                Ads</span><span
                                                style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">484</span>
                                            <div style="clear:both"></div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </div>

                        <script>
                            var datas = {{ Js::from($datas) }};


                            console.log(datas);
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Kategori',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: datas
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div>
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...
                                </p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                <h4><a href="#">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona
                                    nande...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-3.jpg" alt="">
                                <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et
                                    totam...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-4.jpg" alt="">
                                <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum
                                    cuder...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-5.jpg" alt="">
                                <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos
                                    eius...</p>
                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div>
            </div>


        </div>
    </section>
</x-applayout>
