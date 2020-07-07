

## 作品集計畫

作品內容:

1. 網頁設計(web): 1.類比時鐘 2.統一發票 3.打地鼠

2. 插畫作品(illustration): 1.報紙插畫  2.封面繪本  3.繪本出版

3. 平面設計(graphic): 1.筆記本 2.貼紙設計



## 視覺計畫

簡約風格 

配色:#7bc3d1



## 資料庫設計

資料表:

* about 基本資料
  
  | id        流水號 
  | intro     簡介
  | bio       自傳


* admin 管理者

  | id        流水號 
  | acc       帳號
  | pw        密碼


* contect 聯絡方式

  | id        流水號 
  | email     電子信箱
  | github    github


* edu 學歷
  
  | id        流水號 
  | school    學校
  | dept      系所


* exp 經歷

 | id         流水號
 | during     工作期間
 | corp       任職公司
 | position   職位
 | job        工作內容


* pro 作品集
  
  | id        流水號
  | filename  檔名
  | name      作品名
  | url       作品連結網址


* skill 技能
  
  | id     流水號 
  | class  分類
  | skill  技能
  | level  程度




1. 依序建立後台功能需要的九張資料表:
  * title

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |img   |text    |     |         |     | 檔名/路徑 |
    |text  |text    |     |         |     | 文字      |
    |sh    |int(1)  |     |   0     |     | 顯示      |
    
  * ad

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |img   |text    |     |         |     | 檔名/路徑 |
    |text  |text    |     |         |     | 文字     |
    |sh    |int(1)  |     |   1     |     | 顯示     |

  * mvim
  
    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |img   |text    |     |         |     | 檔名/路徑 |
    |text  |text    |     |         |     | 文字     |
    |sh    |int(1)  |     |   1     |     | 顯示     |

  * image

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |img   |text    |     |         |     | 檔名/路徑 |
    |text  |text    |     |         |     | 文字      |
    |sh    |int(1)  |     |   1     |     | 顯示      |

  * total

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  |流水號     |
    |total |int(5)  |     |         |     |訪客數     |

  * bottom

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  |流水號     |
    |bottom|text    |     |         |     |頁尾版權   |

  * news

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |img   |text    |     |         |     | 檔名/路徑 |
    |text  |text    |     |         |     | 文字      |
    |sh    |int(1)  |     |   1     |     | 顯示      |

  * admin

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |acc   |text    |     |         |     | 帳  號    |
    |pw    |text    |     |         |     | 密  碼    |

  * menu

    | name |  type  |  pk | default | A_I |   note   |
    |:----:|:------:|:---:|:-------:|:---:|:--------:|
    |id    |int(5)  |yes  |         |yes  | 流水號    |
    |name  |text    |     |         |     | 文字      |
    |href  |text    |     |         |     | 連結      |
    |parent|int(5)  |     |         |     | 主選單id  |
    |sh    |int(1)  |     |  1      |     | 顯示      |

