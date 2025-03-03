
const swiper = new Swiper('.swiper', { 

    loop: true, // 無限ループ
    centeredSlides: false, // 

  
    autoplay: {
      delay: 3000, // 自動スライドの間隔（ミリ秒）
      disableOnInteraction: false, // ユーザー操作後も自動再生を継続
    },
    
  
    pagination: false, // ドットを無効化
    navigation: false, // 矢印を無効化
  
    // レスポンシブ設定
    breakpoints: {
      768: {
        slidesPerView: 1.5, // PCサイズ：左右少し見切れる
        spaceBetween: 20,
        centeredSlides: false,
      },
      0: {
        slidesPerView: 1.2, // スマホサイズ：右側に少し次の画像が見える
        spaceBetween: 10, // スライド間の余白を少し狭く
        centeredSlides: false, // 左揃えにする
      },
   
    },
  });

