FROM heroku/php
RUN chmod a+rwx -R /app/user/conv/upload
#RUN JVM_BUILDPACK_URL="https://buildpack-registry.s3.amazonaws.com/buildpacks/heroku/jvm.tgz"; \
#RUN mkdir -p /tmp/jvm-common
#RUN curl --silent --location "https://buildpack-registry.s3.amazonaws.com/buildpacks/heroku/jvm.tgz" | tar xzm -C /tmp/jvm-common --strip-components=1
#RUN source /tmp/jvm-common/bin/util
#RUN source /tmp/jvm-common/bin/java
#RUN install_java_with_overlay ${BUILD_DIR}

