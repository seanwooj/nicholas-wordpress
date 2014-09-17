require 'mysql'

CREDENTIALS = YAML.load_file('credentials.yml')
DATABASE = CREDENTIALS['host']
USER = CREDENTIALS['user']
PASSWORD = CREDENTIALS['password']
DB_DIR = 'tmp/db'
SITE_ATTRIBUTES = {
  'development' => {
    'url' => 'nicholas.dev'
  },
  'production' => {
    'url' => 'lintonwealth.com'
  }
}


desc "Create a temporary db directory"
directory DB_DIR

namespace :db do
  desc "create a backup of development db"
  task :dump_dev => DB_DIR do
    puts "Dumping the development database. Please wait a moment."
    sh "mysqldump -u #{USER} -p linton_development > #{DB_DIR}/linton_development.sql"
    puts "Local development database dumped!"
  end

  desc "Removes the tmp file and subdirectories"
  task :clean_tmp do
    sh "rm -rf tmp"
    puts "deleted tmp!"
  end

  SITE_ATTRIBUTES.each do |env_name, attributes|
    namespace env_name do
      # rake db:staging:create_database_dump
      desc "creates a db dump of development and replaces urls to point to #{env_name}'s urls"
      task :create_database_dump => :dump_dev do
        sh "cp #{DB_DIR}/linton_development.sql #{DB_DIR}/linton_#{env_name}.sql"
        # Apparently in BSD variant systems (OSX), sed -i must be written like so -> sed -i '' 'command'
        sh "sed -i '' 's/#{SITE_ATTRIBUTES['development']['url']}/#{attributes['url']}/g' #{DB_DIR}/linton_#{env_name}.sql"
      end

      #rake db:staging:push_local_database
      desc "pushes the modified development dump to #{env_name}"
      task :push_local_database => :create_database_dump do
        input = ''
        STDOUT.puts "WARNING: THIS WILL REPLACE THE #{env_name.upcase} DATABASE WITH YOUR LOCAL DEVELOPMENT DATABASE. CONFIRM(Y/N)."
        input = STDIN.gets.chomp
        raise "DATABASE NOT PUSHED." unless input == 'Y'
        sh "mysql -u #{USER} -p -h #{DATABASE} linton_#{env_name} < #{DB_DIR}/linton_#{env_name}.sql"
        puts "DATABASE PUSHED TO #{env_name.upcase}"
      end
    end
  end

end