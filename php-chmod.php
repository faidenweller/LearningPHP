<?php

/*
    chmod()
1. numara 0 ile başlar.
2. numara dosya sahibinin izinleri
3. numara kullanıcı gruplarının izinleri
4. numara ise geri kalan herkesi

1= execute (işlem izni)
2= yazma izni
4= okuma izni
(toplamları 7 olur. eger 2. numarada 7 varsa dosya sahibine tüm izinler verilmiş oluyor)

 */

  chmod('test.txt', 0777);