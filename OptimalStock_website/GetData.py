

import pandas as pd
import numpy as np
import quandl, math, datetime
import time
from datetime import date, timedelta

#Get date of yesterday
#timeRef = 3
yesterdayDate = date.today() - timedelta(2)
TodayDate = (time.strftime("%Y-%m-%d"))

#Array of London Metal Exchange
MetalEx = ['LME/PR_CU','LME/PR_AL', 'LME/PR_ZI', 'LME/PR_TN', 'LME/PR_NI']

#End of the day US stock prices
EDS = ['EOD/KO', 'EOD/WMT', 'EOD/VZ', 'EOD/JPM', 'EOD/INTC', 'EOD/AAPL']

#quandl key
quandl.ApiConfig.api_key = 'TikdAyAAczTLfX793dzb'
#get file to write to
f = open('middleMan.txt', 'w+')
#for loop for runing truth Exchange array
for item in MetalEx:
    #get singel value from quandl
    rawData = quandl.get(item, authtoken="TikdAyAAczTLfX793dzb", start_date=yesterdayDate, end_date=yesterdayDate)
    #print(rawData)

    #get value form pandas data frame to float (cash buyer)
    df = pd.DataFrame(rawData, columns=['Cash Buyer', yesterdayDate])
    df=df.values
    df=df[0]
    df=df[0]
    #write to value to file
    finalData = (str(df) + '\n')
    print(df)
    f.write(finalData)
# Get value for EDS
for item in EDS:
    rawDataEDS = quandl.get(item, authtoken="TikdAyAAczTLfX793dzb", start_date=yesterdayDate, end_date=yesterdayDate)
    dfEDS = pd.DataFrame(rawDataEDS,columns=['Close', yesterdayDate])
    dfEDS=dfEDS.values
    dfEDS=dfEDS[0]
    dfEDS=dfEDS[0]
    finalDataEDS = (str(dfEDS) + '\n')
    print(dfEDS)
    f.write(finalDataEDS)

f.close()
