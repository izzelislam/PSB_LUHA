@extends('admin.layouts.app')

@section('page-title', 'Dashboard')
    
@section('content')
<div class="col-sm-6 col-lg-4">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div class="subheader">Sales</div>
        <div class="ms-auto lh-1">
          <div class="dropdown">
            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item active" href="#">Last 7 days</a>
              <a class="dropdown-item" href="#">Last 30 days</a>
              <a class="dropdown-item" href="#">Last 3 months</a>
            </div>
          </div>
        </div>
      </div>
      <div class="h1 mb-3">75%</div>
      <div class="d-flex mb-2">
        <div>Conversion rate</div>
        <div class="ms-auto">
          <span class="text-green d-inline-flex align-items-center lh-1">
            7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
          </span>
        </div>
      </div>
      <div class="progress progress-sm">
        <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
          <span class="visually-hidden">75% Complete</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-lg-4">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div class="subheader">Revenue</div>
        <div class="ms-auto lh-1">
          <div class="dropdown">
            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item active" href="#">Last 7 days</a>
              <a class="dropdown-item" href="#">Last 30 days</a>
              <a class="dropdown-item" href="#">Last 3 months</a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-baseline">
        <div class="h1 mb-0 me-2">$4,300</div>
        <div class="me-auto">
          <span class="text-green d-inline-flex align-items-center lh-1">
            8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
          </span>
        </div>
      </div>
    </div>
    <div id="chart-revenue-bg" class="chart-sm"></div>
  </div>
</div>
<div class="col-sm-6 col-lg-4">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div class="subheader">New clients</div>
        <div class="ms-auto lh-1">
          <div class="dropdown">
            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item active" href="#">Last 7 days</a>
              <a class="dropdown-item" href="#">Last 30 days</a>
              <a class="dropdown-item" href="#">Last 3 months</a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-baseline">
        <div class="h1 mb-3 me-2">6,782</div>
        <div class="me-auto">
          <span class="text-yellow d-inline-flex align-items-center lh-1">
            0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /></svg>
          </span>
        </div>
      </div>
      <div id="chart-new-clients" class="chart-sm"></div>
    </div>
  </div>
</div>

<div class="col-md-8">
  <div class="card" style="height: calc(24rem + 10px)">
    <div class="card-body card-body-scrollable card-body-scrollable-shadow">
      <div class="divide-y">
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar">JL</span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
              </div>
              <div class="text-muted">yesterday</div>
            </div>
            <div class="col-auto align-self-center">
              <div class="badge bg-primary"></div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
            <div class="col-auto align-self-center">
              <div class="badge bg-primary"></div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Dunn Slane</strong> posted <strong>"Well, what do you want?"</strong>.
              </div>
              <div class="text-muted">today</div>
            </div>
            <div class="col-auto align-self-center">
              <div class="badge bg-primary"></div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Emmy Levet</strong> created a new project <strong>Morning alarm clock</strong>.
              </div>
              <div class="text-muted">4 days ago</div>
            </div>
            <div class="col-auto align-self-center">
              <div class="badge bg-primary"></div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Maryjo Lebarree</strong> liked your photo.
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar">EP</span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Egan Poetz</strong> registered new client as <strong>Trilia</strong>.
              </div>
              <div class="text-muted">yesterday</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/002f.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Kellie Skingley</strong> closed a new deal on project <strong>Pen Pineapple Apple Pen</strong>.
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/003f.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Christabel Charlwood</strong> created a new project for <strong>Wikibox</strong>.
              </div>
              <div class="text-muted">4 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar">HS</span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Haskel Shelper</strong> change status of <strong>Tabler Icons</strong> from <strong>open</strong> to <strong>closed</strong>.
              </div>
              <div class="text-muted">today</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/006m.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Lorry Mion</strong> liked <strong>Tabler UI Kit</strong>.
              </div>
              <div class="text-muted">yesterday</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/004f.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Leesa Beaty</strong> posted new video.
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/007m.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Perren Keemar</strong> and 3 others followed you.
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar">SA</span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Sunny Airey</strong> upload 3 new photos to category <strong>Inspirations</strong>.
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/009m.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Geoffry Flaunders</strong> made a <strong>$10</strong> donation.
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/010m.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Thatcher Keel</strong> created a profile.
              </div>
              <div class="text-muted">3 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/005f.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI Birthday</strong>.
              </div>
              <div class="text-muted">4 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar" style="background-image: url(./static/avatars/006f.jpg)"></span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Avivah Mugleston</strong> mentioned you on <strong>Best of 2020</strong>.
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-auto">
              <span class="avatar">AA</span>
            </div>
            <div class="col">
              <div class="text-truncate">
                <strong>Arlie Armstead</strong> sent a Review Request to <strong>Amanda Blake</strong>.
              </div>
              <div class="text-muted">2 days ago</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="row row-cards">
    <div class="col-12">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-blue text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
              </span>
            </div>
            <div class="col">
              <div class="font-weight-medium">
                132 Sales
              </div>
              <div class="text-muted">
                12 waiting payments
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="6" cy="19" r="2" /><circle cx="17" cy="19" r="2" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
              </span>
            </div>
            <div class="col">
              <div class="font-weight-medium">
                78 Orders
              </div>
              <div class="text-muted">
                32 shipped
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-yellow text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/users -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
              </span>
            </div>
            <div class="col">
              <div class="font-weight-medium">
                1352 Members
              </div>
              <div class="text-muted">
                163 registered today
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
              </span>
            </div>
            <div class="col">
              <div class="font-weight-medium">
                623 Shares
              </div>
              <div class="text-muted">
                16 today
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card card-sm">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-auto">
              <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
              </span>
            </div>
            <div class="col">
              <div class="font-weight-medium">
                132 Likes
              </div>
              <div class="text-muted">
                21 today
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('addon-script')
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
      chart: {
        type: "area",
        fontFamily: 'inherit',
        height: 40.0,
        sparkline: {
          enabled: true
        },
        animations: {
          enabled: false
        },
      },
      dataLabels: {
        enabled: false,
      },
      fill: {
        opacity: .16,
        type: 'solid'
      },
      stroke: {
        width: 2,
        lineCap: "round",
        curve: "smooth",
      },
      series: [{
        name: "Profits",
        data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
      }],
      grid: {
        strokeDashArray: 4,
      },
      xaxis: {
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false,
        },
        type: 'datetime',
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      labels: [
        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      ],
      colors: ["#206bc4"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 40.0,
        sparkline: {
          enabled: true
        },
        animations: {
          enabled: false
        },
      },
      fill: {
        opacity: 1,
      },
      stroke: {
        width: [2, 1],
        dashArray: [0, 3],
        lineCap: "round",
        curve: "smooth",
      },
      series: [{
        name: "May",
        data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
      },{
        name: "April",
        data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
      }],
      grid: {
        strokeDashArray: 4,
      },
      xaxis: {
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        type: 'datetime',
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      labels: [
        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      ],
      colors: ["#206bc4", "#a8aeb7"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
      chart: {
        type: "bar",
        fontFamily: 'inherit',
        height: 40.0,
        sparkline: {
          enabled: true
        },
        animations: {
          enabled: false
        },
      },
      plotOptions: {
        bar: {
          columnWidth: '50%',
        }
      },
      dataLabels: {
        enabled: false,
      },
      fill: {
        opacity: 1,
      },
      series: [{
        name: "Profits",
        data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
      }],
      grid: {
        strokeDashArray: 4,
      },
      xaxis: {
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false,
        },
        type: 'datetime',
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      labels: [
        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      ],
      colors: ["#206bc4"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
      chart: {
        type: "bar",
        fontFamily: 'inherit',
        height: 240,
        parentHeightOffset: 0,
        toolbar: {
          show: false,
        },
        animations: {
          enabled: false
        },
        stacked: true,
      },
      plotOptions: {
        bar: {
          columnWidth: '50%',
        }
      },
      dataLabels: {
        enabled: false,
      },
      fill: {
        opacity: 1,
      },
      series: [{
        name: "Web",
        data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
      },{
        name: "Social",
        data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
      },{
        name: "Other",
        data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
      }],
      grid: {
        padding: {
          top: -20,
          right: 0,
          left: -4,
          bottom: -4
        },
        strokeDashArray: 4,
        xaxis: {
          lines: {
            show: true
          }
        },
      },
      xaxis: {
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false,
        },
        type: 'datetime',
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      labels: [
        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
      ],
      colors: ["#206bc4", "#79a6dc", "#bfe399"],
      legend: {
        show: false,
      },
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
      chart: {
        type: "radialBar",
        fontFamily: 'inherit',
        height: 40,
        width: 40,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      plotOptions: {
        radialBar: {
          hollow: {
            margin: 0,
            size: '75%'
          },
          track: {
            margin: 0
          },
          dataLabels: {
            show: false
          }
        }
      },
      colors: ["#206bc4"],
      series: [35],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
      chart: {
        type: "area",
        fontFamily: 'inherit',
        height: 192,
        sparkline: {
          enabled: true
        },
        animations: {
          enabled: false
        },
      },
      dataLabels: {
        enabled: false,
      },
      fill: {
        opacity: .16,
        type: 'solid'
      },
      stroke: {
        width: 2,
        lineCap: "round",
        curve: "smooth",
      },
      series: [{
        name: "Purchases",
        data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
      }],
      grid: {
        strokeDashArray: 4,
      },
      xaxis: {
        labels: {
          padding: 0,
        },
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false,
        },
        type: 'datetime',
      },
      yaxis: {
        labels: {
          padding: 4
        },
      },
      labels: [
        '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
      ],
      colors: ["#206bc4"],
      legend: {
        show: false,
      },
      point: {
        show: false
      },
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 24,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      stroke: {
        width: 2,
        lineCap: "round",
      },
      series: [{
        color: "#206bc4",
        data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
      }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 24,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      stroke: {
        width: 2,
        lineCap: "round",
      },
      series: [{
        color: "#206bc4",
        data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
      }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 24,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      stroke: {
        width: 2,
        lineCap: "round",
      },
      series: [{
        color: "#206bc4",
        data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
      }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 24,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      stroke: {
        width: 2,
        lineCap: "round",
      },
      series: [{
        color: "#206bc4",
        data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
      }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 24,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      stroke: {
        width: 2,
        lineCap: "round",
      },
      series: [{
        color: "#206bc4",
        data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
      }],
    })).render();
  });
  // @formatter:on
</script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
      chart: {
        type: "line",
        fontFamily: 'inherit',
        height: 24,
        animations: {
          enabled: false
        },
        sparkline: {
          enabled: true
        },
      },
      tooltip: {
        enabled: false,
      },
      stroke: {
        width: 2,
        lineCap: "round",
      },
      series: [{
        color: "#206bc4",
        data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
      }],
    })).render();
  });
  // @formatter:on
</script>
@endpush