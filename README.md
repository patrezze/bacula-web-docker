# Bacula-Web Extended Docker Image

This project provides an extended Docker image of [Bacula-Web](https://github.com/bacula-web/bacula-web) that allows configuration via environment variables. The goal is to simplify the setup and make it easier to customize Bacula-Web deployments using Docker.

## Docker Hub

You can find the image on Docker Hub: [patrezze/bacula-web](https://hub.docker.com/r/patrezze/bacula-web)

## Usage

A `docker-compose.yml` file is included in this project. To use it:

1. Create a `.env` file in the project directory.
2. Fill the `.env` file with the desired environment variables and their values.
3. Run the services with:

```bash
docker-compose up -d
```

## Environment Variables

The following table lists all configurable environment variables, along with their descriptions, default values, and allowed values:

### General settings

| Variable                    | Description                                | Default              | Values |
| ---                         | ---                                        | ---                  | --- |
| `BW_SHOW_INACTIVE_CLIENTS` | Show inactive clients in the interface     | `true`              | `true, false` |
| `BW_HIDE_EMPTY_POOLS`      | Hide pools that do not contain any backups | `true`              | `true, false` |
| `BW_DATETIME_FORMAT`        | Custom datetime format for display         | `Y-m-d H:i:s`      | - |
| `BW_ENABLE_USERS_AUTH`     | Enable authentication for Bacula-Web users | `true`              | `true, false` |
| `BW_DEBUG`                   | Enable debug mode                          | `false`              | `true, false` |
| `BW_LANGUAGE`                | Defines the interface language. [More information aqui](https://www.bacula-web.org/docs/install/configure#language) | `en_US`              | `en_GB, be_BY, ca_ES, de_DE, en_US, es_ES, fr_FR, it_IT, ja_JP, nl_NL, no_NO, pl_PL, pt_BR, ro_RO, ru_RU, sv_SE, zh_CN` |
| `BW_ROWS_PER_PAGE`         | Number of rows displayed per page          | `25`                 | - |

### Database connection settings

| Variable                    | Description                                | Default              | Values |
| ---                         | ---                                        | ---                  | --- |
| `BW_LABEL`                   | Label displayed in the catalog drop-down selector | `Backup Server`      | - |
|` BW_HOST`                    | Database hostname                          | `localhost`          | - |
| `BW_LOGIN`                   | Database username                          | `bacula`             | - |
| `BW_PASSWORD`                | Database password                          | `verystrongpassword` | - |
| `BW_DB_NAME`                | Database name                              | `bacula`             | - |
| `BW_DB_TYPE`                | Database type (MySQL, PostgreSQL or SQLite) | `mysql`              |` mysql, pgsql, sqlite` |
| `BW_DB_PORT`                | Database port                              | `3306`               | - |

## Credits

This project is based on [Bacula-Web](https://github.com/bacula-web/bacula-web). All credits go to the original authors.

## References

- [Bacula-Web Official Repository](https://github.com/bacula-web/bacula-web)
- [Bacula-Web Documentation](https://www.bacula-web.org/docs/)
