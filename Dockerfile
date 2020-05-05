FROM heroku/java
FROM heroku/php
RUN chmod a+rwx -R /app/user/conv/upload
