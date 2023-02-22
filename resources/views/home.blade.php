@section('title', 'Home')

@section('styles')
<style>
   .txt-italic {
      font-style: italic;
   }

   .carousel-img {
      height: 500px;
   }

   .carousel-indicators {
      column-gap: 0.25rem;
   }

   .carousel-indicators button {
      width: 1rem !important;
      height: 0.33rem !important;
   }

   #announcement-lane {
      background-color: #0E0F10;
      overflow: hidden;
   }

   #announcement-lane-label {
      left: 5vw;
   }

   #announcement-lane-overlay {
      transform: skew(-45deg);
      box-shadow: 2.5px 2.5px 5px #00000080;
      background-image: linear-gradient(to right, #8846F266, #AC151900);
      inset-block: 0;
      width: 30vw;
      left: -5vw;
   }

   #home-main-content {
      background-image: url('/img/Home-BG.png');
      background-position: center;
      background-repeat: repeat-y;
      background-size: contain;
      background-color: rgb(6,18,42);
   }

   .section-header {
      text-decoration: underline;
      text-decoration-color: var(--app-accent);
      text-underline-offset: 0.5rem;
      text-decoration-thickness: 2px;
   }

   .sports-tab-wrapper {
      transition: all;
      transition-duration: 300ms;
      transition-timing-function: ease-in-out;
      border: 3.5px solid transparent;
      border-radius: 500px;
   }

   .sports-tab-btn {
      transition: all;
      transition-duration: 300ms;
      transition-timing-function: ease-in-out;
      display: flex;
      align-items: center;
      column-gap: 0.75rem;
      color: #404040;
      font-family: Inter, 'Segoe UI', Verdana, sans-serif;
      background-color: transparent;
      border-radius: 500px;
      padding-inline: 12.5px;
      padding-block: 2.5px;
   }

   .sports-tab-btn:not(.active) {
      padding-inline: 8px;
   }

   .sports-tab-btn * {
      user-select: none;
      z-index: 0;
   }

   .cell {
      background-color: #212E48;
   }

   .cell:hover,
   .cell.active {
      background-color: #2F4166;
   }
   
   .cell:hover .cell-val,
   .cell.active .cell-val {
      color: #28FF58 !important;
   }

   .team-name {
      max-width: 8ch;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
   }

   .duration-btn.active {
      transition: all 300ms 0ms ease-in-out;
      background-color: #28FF5880;
      border-radius: 2.5px;
   }

   .duration-btn:hover {
      filter: brightness(80%);
   }

   #duration-lane {
      overflow-x: auto;
   }

   #duration-lane::-webkit-scrollbar {
      display: none;
   }

   .announcement-marquee {
      position: absolute;
      width: 100%;
      display: flex;
      align-items: center;
      transform: translateY(-50%);
      column-gap: 1.5rem;
      transform: translateX(125%);
      animation-name: marquee;
      animation-fill-mode: forwards;
      animation-iteration-count: infinite;
      animation-duration: 15s;
      animation-timing-function: linear;
   }

   @keyframes marquee {
      from {
         transform: translateY(-50%) translateX(125%);
      }

      to {
         transform: translateY(-50%) translateX(-100%);
      }
   }

   @media only screen and (min-width: 992px) {
      .team-name {
         max-width: 25ch;
      }

      #duration-lane { 
         max-width: 30%;
      }
   }
</style>
@endsection

@section('content')
<!-- <home-view></home-view> -->
<KeepAlive>
<router-view></router-view>
</KeepAlive>
@endsection

@section('scripts')
<script>
   $(document).ready(function() {
      $('.sports-tab-btn:is(.active)').css('color', $('.sports-tab-btn:is(.active)').data('text'));
      $('.sports-tab-btn:is(.active)').css('backgroundColor', $('.sports-tab-btn:is(.active)').data('background'));
      $('.sports-tab-btn:is(.active)').parent().css('borderColor', $('.sports-tab-btn:is(.active)').data('border'));


      $('.sports-tab-btn:is(.active)').find('.sports-btn-label').removeClass('hidden')

      $('.sports-tab-btn:not(.active)').mouseover(function(e) {
         $(this).css('color', $(this).data('text'));
         // $(this).css('backgroundColor', $(this).data('background'));
         // $(this).parent().css('borderColor', $(this).data('border'));
      });

      $('.sports-tab-btn:not(.active)').mouseleave(function(e) {
         $(this).css('color', '#404040');
         // $(this).css('backgroundColor', 'transparent');
         // $(this).parent().css('borderColor', 'transparent');
      });
   });
</script>
@endsection