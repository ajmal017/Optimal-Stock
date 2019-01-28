

import pandas as pd
import numpy as np
import quandl, math, datetime
import time
from datetime import date, timedelta

#Get date of yesterday
yesterdayDate = date.today() - timedelta(2)
TodayDate = (time.strftime("%Y-%m-%d"))

#Array of London Metal Exchange
# 'LME/PR_CU','LME/PR_AL', 'LME/PR_ZI', 'LME/PR_TN', 'LME/PR_NI',
MetalEx = ['EOD/KO', 'EOD/WMT']

#quandl key
quandl.ApiConfig.api_key = 'TikdAyAAczTLfX793dzb'
#get file to write to
f = open('middlemanTest.txt', 'w+')
#for loop for runing truth Exchange array
for item in MetalEx:
    #get singel value from quandl
    rawData = quandl.get(item, authtoken="TikdAyAAczTLfX793dzb", start_date=yesterdayDate, end_date=yesterdayDate)
    print(rawData)

    #get value form pandas data frame to float (cash buyer)
    df = pd.DataFrame(rawData,columns=['Close', yesterdayDate])
    df=df.values
    df=df[0]
    df=df[0]
    #write to value to file
    finalData = (str(df) + '\n')
    print(df)
    f.write(finalData)
f.close()
