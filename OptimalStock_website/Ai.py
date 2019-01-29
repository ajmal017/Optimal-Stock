#https://www.youtube.com/watch?v=JcI5Vnw0b2c&list=PLQVvvaa0QuDfKTOs3Keq_kaG2P55YRn5v&index=2

import pandas as pd
import quandl, math, datetime
import numpy as np
from sklearn import preprocessing, cross_validation, svm
from sklearn.linear_model import LinearRegression
import matplotlib.pyplot as plt
from matplotlib import style

style.use('ggplot') #matplotlib

#https://www.quandl.com/
#df = quandl.get('WIKI/GOOGL') print(df.head)
df = quandl.get('WIKI/GOOGL')
df = df[['Adj. Open','Adj. High','Adj. Low','Adj. Close','Adj. Volume']]

df['HL_PCT'] = (df['Adj. High'] - df['Adj. Close']) / df['Adj. Close'] * 100.0
df['PCT_change'] = (df['Adj. Close'] - df['Adj. Open']) / df['Adj. Open'] * 100.0

df = df[['Adj. Close','HL_PCT','PCT_change','Adj. Volume']]
#print(df.head())

forecast_col = 'Adj. Close'
df.fillna(-99999, inplace=True)
forecast_out = int(math.ceil(0.009*len(df))) #change 0.01 to 0.001 to tomorrw etc
#print(forecast_out) # forecast


df['label'] = df[forecast_col].shift(-forecast_out)

#print(df.tail())
#print(df.head())

#scaling and preprocessing
X = np.array(df.drop(['label'],1))
X = preprocessing.scale(X)
X_lately = X[-forecast_out:] # 30 days of data;X_lately no Y; Y=kX+m
X = X[:-forecast_out]

df.dropna(inplace=True)
Y = np.array(df['label'])
Y = np.array(df['label'])

X_train, X_test, Y_train, Y_test = cross_validation.train_test_split(X, Y, test_size=0.2) # shuffles them upp
#print("Train")
#print(X_train)

#X = feture but Y = label; not graf
#classefire
clf = LinearRegression(n_jobs=-1) #cahnge algortim :  : LinearRegression() := svm.SVR(kernal = 'poly')
clf.fit(X_train, Y_train)
accuracy = clf.score(X_test, Y_test)
#print(accuracy) #% accuracy shift 1%

forecast_set = clf.predict(X_lately) # pass array to predict per value in that array ; core
#print(forecast_set, accuracy, forecast_out)
print(forecast_set)
df['forecast'] = np.nan #nan list of numbers


#write to middleMan.txt but for AI data
f = open('StockDataFile.txt', 'w+')
for item in forecast_set:
    dfData = pd.DataFrame(item)
    pdfData = dfData.values
    dfData=dfData[0]
    dfData=dfData[0]
    finalDataString = (str(dfData))

    f.write(finalDataString)
f.close()
