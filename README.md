目錄
===
1. [日期](#日期)
    * [2018-11-09](#2018-11-09)
    * [2018-11-08](#2018-11-08)
    * [2018-11-03](#2018-11-03)
    * [2018-10-28](#2018-10-28)
    * [2018-10-27](#2018-10-27)

日期
===
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
