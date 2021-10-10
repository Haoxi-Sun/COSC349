import boto3

s3 = boto3.client('s3')
s3.download_file('sunao770-test', 'index.html', 'index.html')
s3.download_file('sunao770-test', 'error.html', 'error.html')
#s3.download_file('sunao770-test', 'Dial_M_for_Murder.jpg', 'Dial_M_for_Murder.jpg')
