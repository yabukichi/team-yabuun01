# laravel-react一気にアップするdockerサンプル

laravelとreactの環境をdockerで用意しました。

## 初回構築
```
git colne https://github.com/yabukichi/gomi-contents
cd ./next
npm install
cd ..
docker-compose build
docker-compose up -d
docker-compose exec php composer install
docker-compose exec php php artisan migrate
```

## 運用中に使いそうなコマンド

docker起動
```
docker-compose up
```

dockerイメージを裏側で起動する。（デーモンで起動）
```
docker-compose up -d
```

dockerイメージを停止・削除する。
```
docker-compose down
```

dockerイメージを削除せずに停止する。
```
docker-compose stop
```

dockerイメージを再起動。停止（stop）した時に使う。
```
docker-compose start
```
