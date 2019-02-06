目錄
===
- [目錄](#%E7%9B%AE%E9%8C%84)
- [日期](#%E6%97%A5%E6%9C%9F)
  - [2019-02-06](#2019-02-06)
  - [2019-02-05](#2019-02-05)
  - [2019-02-02](#2019-02-02)
  - [2019-01-27](#2019-01-27)
  - [2019-01-20](#2019-01-20)
  - [2018-11-10](#2018-11-10)
  - [2018-11-09](#2018-11-09)
  - [2018-11-08](#2018-11-08)
  - [2018-11-03](#2018-11-03)
  - [2018-10-28](#2018-10-28)
  - [2018-10-27](#2018-10-27)

日期
===
2019-02-06
---
1. 加入 vue-router 及 react-router-dom，可以開始實作後台登入
2. 後台登入後 先做文章的新增、編輯、刪除功能
3. 前台要可以點文章進去看

2019-02-05
---
1. React 設定完成，加入登入頁面，之後找 React 的路由使用

2019-02-02
---
1. 前台完成，準備寫後台，後台的前端預定使用 React

2019-01-27
---
1. 使用資料庫未完成的剩下
   1. [CardController](app\Http\Controllers\Frontend\CardController.php)
   2. [CarouselController](app\Http\Controllers\Frontend\CarouselController.php)
   3. [HeaderController](app\Http\Controllers\Frontend\HeaderController.php)

2019-01-20
---
1. 準備建立資料表

2018-11-10
---
1. 分析 laravel 的 Backend & Frontend 設計

2018-11-09
---
1. 加入 axsios 去請求資料

2018-11-08
---
1. 改用 https
    1. 上正機可以選 `let's encrypt`
    2. 從模擬機複製 `/etc/nginx/ssl/ca.homestead.homestead.crt` 出來到本機，  
        點擊安裝到本機電腦，存放到 `受信任的根憑證授權單位`
    3. nginx 設定成自動導往 https
        ```
        server { // 把 http 請求都轉給 https
            listen 80;
            server_name .homestead.local;
            return 301 https://homestead.local$request_uri;
        }

        server { // https 請求
            listen 443 ssl http2;
            server_name .homestead.local;

            // 要處理的東西
        }
        ```

2018-11-03
---
1. CarouselComponent 的 bootstrap carousel 功能修正
    1. #app 也要把高度設定為 `hight:100%;`
    2. 圖片路徑設定要正確

2018-10-28
---
1. css 放在 resources/sass 中

2018-10-27
---
1. CarouselComponent 的 bootstrap carousel 效果沒有出來
2. 自訂義的 css 要放哪 ?
