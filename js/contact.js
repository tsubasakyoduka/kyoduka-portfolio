$(function() {
    $('#contact').vegas({
        slides: [
            { src: './img/yozora.jpg' },
            { src: './img/yozora.jpg'},
            
        ],
        overlay: './js/overlays/02.png', //フォルダ『overlays』の中からオーバーレイのパターン画像を選択
        transition: 'zoomOut', //スライドを遷移させる際のアニメーション
        transitionDuration: 4000, //スライドの遷移アニメーションの時間
        delay: 10000, //スライド切り替え時の遅延時間
        animation: 'random', //スライド表示中のアニメーション
        animationDuration: 30000, //スライド表示中のアニメーションの時間
        loop: true,
    });
    
    // $('#works').vegas({
    //     slides: [
    //         { src: './img/works.jpg' },
    //         { src: './img/works.jpg'},
            
    //     ],
    //     overlay: './js/overlays/02.png', //フォルダ『overlays』の中からオーバーレイのパターン画像を選択
    //     transition: 'zoomOut', //スライドを遷移させる際のアニメーション
    //     transitionDuration: 4000, //スライドの遷移アニメーションの時間
    //     delay: 10000, //スライド切り替え時の遅延時間
    //     animation: 'random', //スライド表示中のアニメーション
    //     animationDuration: 30000, //スライド表示中のアニメーションの時間
    //     loop: true,
    // });
    
    // $('.logo').vegas({
    //     slides: [
    //         { src: './img/image17.png' },
    //         { src: './img/myimage1.png' },
    //         { src: './img/image1111.png' },
    //         { src: './img/image11.png' }
    //     ],
    //     overlay: './js/overlays/02.png', //フォルダ『overlays』の中からオーバーレイのパターン画像を選択
    //     transition: 'fade', //スライドを遷移させる際のアニメーション
    //     transitionDuration: 4000, //スライドの遷移アニメーションの時間
    //     delay: 10000, //スライド切り替え時の遅延時間
    //     animation: 'random', //スライド表示中のアニメーション
    //     animationDuration: 20000, //スライド表示中のアニメーションの時間
    // });
});