import numpy as np
import cv2

from tkinter import *
from tkinter import filedialog

def imageMatching( image_path1, image_path2 ) :
    difference = 0

    image1 = cv2.imread( image_path1, cv2.IMREAD_GRAYSCALE )
    image2 = cv2.imread( image_path2, cv2.IMREAD_GRAYSCALE )
    res = None 

    orb = cv2.ORB_create()
    kp1, des1 = orb.detectAndCompute( image1, None )
    kp2, des2 = orb.detectAndCompute( image2, None )

    bf = cv2.BFMatcher( cv2.NORM_HAMMING, crossCheck = True )
    matches = bf.match( des1, des2 )

    matches = sorted( matches, key = lambda x:x.distance )

    lengthCount = len( matches )
    if lengthCount > 30 :
        lengthCount = 30

    for i in range( lengthCount ) :
        difference = difference + matches[i].distance

    difference = difference / lengthCount
    print( difference )
    
    """
    res = cv2.drawMatches( image1, kp1, image2, kp2, matches[:50], res, 
                singlePointColor = (0, 255, 0), matchColor = (255, 0, 0), flags = 0 ) 
    """    
    # flags : 0(모든 특징), 2(일치하는 특징만)
    # singlePointColor : 개인이 가진 특징을 표시하는 색상
    # matchColor : 두 사진의 공통된 특징을 이어줄 선의 색상
    # matches[:숫자] : : 총 몇 개의 공통된 특징을 찾아서 보여줄 것이지 숫자를 지정할 수 있음

    res = cv2.drawMatches( image1, kp1, image2, kp2, matches[:10], res, flags = 0 )   


  #  cv2.imshow( "Matched", res )
  #  cv2.waitKey(0)
    cv2.destroyAllWindows()
    return difference

rose = [ "ROSE", "rose1.jpg", "rose2.jpg", "rose3.jpg", "rose4.jpg", "rose5.png", "rose6.jpg", "rose7.jpg", "rose8.jpg", "rose9.jpg", "rose10.jpg" ]
tulip = [ "TULIP", "tulip1.jpg", "tulip2.jpg", "tulip3.jpg", "tulip4.jpg", "tulip5.jpg", "tulip6.jpg", "tulip7.jpg", "tulip8.jpg", "tulip9.jpg", "tulip10.jpg" ]
acasia = [ "ACASIA", "acasia1.jpg", "acasia2.jpg", "acasia3.jpg", "acasia4.jpg", "acasia5.jpg", "acasia6.jpg", "acasia7.jpg", "acasia8.jpg", "acasia9.jpg", "acasia10.jpg" ]
sansevieria = [ "SANSEVIERIA", "sansevieria1.jpg", "sansevieria2.jpg", "sansevieria3.jpg", "sansevieria4.jpg", "sansevieria5.jpg", "sansevieria6.jpg", "sansevieria7.jpg", "sansevieria8.jpg", "sansevieria9.jpg", "sansevieria10.jpg" ]

plantsList = [ rose, tulip, acasia, sansevieria ]

basePath = "C:/Users/LSJ/Desktop/simTest/"
fileName = filedialog.askopenfilename( initialdir = "C:/Users/LSJ/Desktop/", title = "select file" )

scoreList = []

if fileName != "" :
    for plants in plantsList :
        isFirst = True
        title = ""
        for pict in plants :
            if isFirst :
                title = pict
                isFirst = False
            else :
                path = basePath + pict
                score = imageMatching( path, fileName )
                temp = [ title, score ]
                scoreList.append( temp )
    scoreList.sort( key = lambda x:x[1] )

    finalResult = []
    for result in scoreList[:5] :
        isLoop = True
        temp = []
        plantsName = result[0]
        for final in finalResult :
            if final[0] == plantsName :
                final[1] += 1
                isLoop = False
                break
        if isLoop :
            temp.append( plantsName )
            temp.append( 0 )
            finalResult.append( temp )

    print( finalResult[0][0] )