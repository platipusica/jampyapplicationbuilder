FROM heroku/php
RUN chmod a+rwx -R /app/user/conv/upload
RUN echo $' \n\
JVM_BUILDPACK_URL="https://buildpack-registry.s3.amazonaws.com/buildpacks/heroku/jvm.tgz" \n\
mkdir -p /tmp/jvm-common \n\
curl --silent --location $JVM_BUILDPACK_URL | tar xzm -C /tmp/jvm-common --strip-components=1 \n\
source /tmp/jvm-common/bin/util \n\
source /tmp/jvm-common/bin/java \n\
install_java_with_overlay ${BUILD_DIR}

